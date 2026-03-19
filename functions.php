<?php
/**
 * Vite + WordPress 用 assets 読み込み
 */
function my_script_init() {

  $is_local = (defined('WP_ENVIRONMENT_TYPE') && WP_ENVIRONMENT_TYPE === 'local');

  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();

  /* =========================
   * 開発環境（Vite）
   * ========================= */
  if ($is_local) {

    // jQuery（既存JS依存用）
    wp_enqueue_script('jquery');

    // Vite HMR client
    wp_enqueue_script(
      'vite-client',
      'http://localhost:3000/@vite/client',
      [],
      null,
      true
    );
    wp_script_add_data('vite-client', 'type', 'module');

    // メインエントリ
    wp_enqueue_script(
      'vite-main',
      'http://localhost:3000/src/js/script.js',
      ['vite-client', 'jquery'],
      null,
      true
    );
    wp_script_add_data('vite-main', 'type', 'module');

    // ローカルでは build成果物は読まない
    return;
  }

  /* =========================
   * 本番環境（build：manifest）
   * ========================= */
  $manifest_path = $theme_dir . '/assets/.vite/manifest.json';
  if (!file_exists($manifest_path)) {
    error_log('[vite] manifest not found: ' . $manifest_path);
    return;
  }

  $manifest = json_decode(file_get_contents($manifest_path), true);
  if (!is_array($manifest)) {
    error_log('[vite] manifest json decode failed: ' . $manifest_path);
    return;
  }

  $entry_key = 'src/js/script.js';
  if (empty($manifest[$entry_key])) {
    error_log('[vite] entry not found in manifest: ' . $entry_key);
    return;
  }

  $entry = $manifest[$entry_key];

  // JS
  if (!empty($entry['file'])) {
    $js_rel = '/assets/' . ltrim($entry['file'], '/'); // 例: /assets/js/script.js
    $js_abs = $theme_dir . $js_rel;

    wp_enqueue_script(
      'my-script',
      $theme_uri . $js_rel,
      ['jquery'],
      file_exists($js_abs) ? filemtime($js_abs) : null,
      true
    );
  }

  // CSS（JSから生成されたCSS）
  if (!empty($entry['css']) && is_array($entry['css'])) {
    foreach ($entry['css'] as $i => $css_file) {
      $css_rel = '/assets/' . ltrim($css_file, '/'); // 例: /assets/css/script.css
      $css_abs = $theme_dir . $css_rel;

      wp_enqueue_style(
        'my-style-' . $i,
        $theme_uri . $css_rel,
        [],
        file_exists($css_abs) ? filemtime($css_abs) : null
      );
    }
  }
}
add_action('wp_enqueue_scripts', 'my_script_init');

// Vite の2つだけ、scriptタグを「強制的に module」として出力する
add_filter('script_loader_tag', function ($tag, $handle, $src) {

  if (!in_array($handle, ['vite-client', 'vite-main'], true)) {
    return $tag;
  }

  return sprintf(
    '<script type="module" crossorigin src="%s"></script>' . "\n",
    esc_url($src)
  );

}, 10, 3);


/* =========================
 * セキュリティ（元のまま）
 * ========================= */

remove_action('wp_head', 'wp_generator');

add_filter('author_rewrite_rules', '__return_empty_array');
function disable_author_archive() {
  if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(esc_url(home_url('/404.php')));
    exit;
  }
}
add_action('init', 'disable_author_archive');

if (!is_admin()) {
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) {
    die();
  }
  add_filter('redirect_canonical', 'my_shapespace_check_enum', 10, 2);
}
function my_shapespace_check_enum($redirect, $request) {
  if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) {
    die();
  }
  return $redirect;
}

add_action('init', 'disable_output');
function disable_output() {
  remove_filter('the_content', 'wpautop');
  // Contact Form 7 のフォーム内の <p><br> 自動整形を止める
}
add_filter('wpcf7_autop_or_not', '__return_false');

// 固定ページに「フォーム用ショートコード」入力欄を追加
add_action('add_meta_boxes', function () {
  add_meta_box(
    'contact_form_shortcode',
    'お問い合わせフォーム（ショートコード）',
    function ($post) {
      $value = get_post_meta($post->ID, '_contact_form_shortcode', true);
      wp_nonce_field('save_contact_form_shortcode', 'contact_form_shortcode_nonce');
      echo '<p>例：<code>[contact-form-7 id="99d556f" title="お問い合わせ"]</code></p>';
      echo '<textarea style="width:100%;min-height:70px;" name="contact_form_shortcode">' . esc_textarea($value) . '</textarea>';
    },
    'page',
    'normal',
    'default'
  );
});

add_action('save_post_page', function ($post_id) {
  if (!isset($_POST['contact_form_shortcode_nonce']) || !wp_verify_nonce($_POST['contact_form_shortcode_nonce'], 'save_contact_form_shortcode')) return;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_page', $post_id)) return;

  $value = isset($_POST['contact_form_shortcode']) ? wp_kses_post($_POST['contact_form_shortcode']) : '';
  update_post_meta($post_id, '_contact_form_shortcode', $value);
});

// 管理画面用: 操作マニュアル保管場所
add_action('init', function () {
  register_post_type('operation_manual', [
    'labels' => [
      'name' => '操作マニュアル',
      'singular_name' => '操作マニュアル',
      'add_new' => '新規追加',
      'add_new_item' => '操作マニュアルを追加',
      'edit_item' => '操作マニュアルを編集',
      'new_item' => '新しい操作マニュアル',
      'view_item' => '操作マニュアルを表示',
      'search_items' => '操作マニュアルを検索',
      'not_found' => '操作マニュアルが見つかりません',
      'not_found_in_trash' => 'ゴミ箱に操作マニュアルはありません',
      'menu_name' => '操作マニュアル',
    ],
    'public' => false,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => false,
    'menu_position' => 25,
    'menu_icon' => 'dashicons-media-document',
    'supports' => ['title', 'editor'],
    'has_archive' => false,
    'rewrite' => false,
    'publicly_queryable' => false,
    'exclude_from_search' => true,
  ]);
});

add_action('add_meta_boxes', function () {
  add_meta_box(
    'operation_manual_file',
    'マニュアルファイル',
    function ($post) {
      $file_id = (int) get_post_meta($post->ID, '_operation_manual_file_id', true);
      $file_url = $file_id ? wp_get_attachment_url($file_id) : '';
      $file_name = $file_id ? basename(get_attached_file($file_id)) : '';

      wp_nonce_field('save_operation_manual_file', 'operation_manual_file_nonce');
      ?>
      <div class="operation-manual-file-field">
        <input type="hidden" name="operation_manual_file_id" id="operation-manual-file-id" value="<?php echo esc_attr($file_id); ?>">
        <p>
          <button type="button" class="button" id="operation-manual-file-select">ファイルを選択</button>
          <button type="button" class="button" id="operation-manual-file-remove" <?php disabled(!$file_id); ?>>解除</button>
        </p>
        <p id="operation-manual-file-name">
          <?php if ($file_url) : ?>
            <a href="<?php echo esc_url($file_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($file_name); ?></a>
          <?php else : ?>
            未選択
          <?php endif; ?>
        </p>
        <p class="description">PDFや画像など、操作マニュアルとして管理したいファイルを登録してください。</p>
      </div>
      <?php
    },
    'operation_manual',
    'normal',
    'default'
  );
});

add_action('save_post_operation_manual', function ($post_id) {
  if (!isset($_POST['operation_manual_file_nonce']) || !wp_verify_nonce($_POST['operation_manual_file_nonce'], 'save_operation_manual_file')) return;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;

  $file_id = isset($_POST['operation_manual_file_id']) ? absint($_POST['operation_manual_file_id']) : 0;

  if ($file_id) {
    update_post_meta($post_id, '_operation_manual_file_id', $file_id);
    return;
  }

  delete_post_meta($post_id, '_operation_manual_file_id');
});

add_filter('manage_operation_manual_posts_columns', function ($columns) {
  $date = $columns['date'] ?? null;

  unset($columns['date']);
  $columns['manual_file'] = 'ファイル';

  if ($date !== null) {
    $columns['date'] = $date;
  }

  return $columns;
});

add_action('manage_operation_manual_posts_custom_column', function ($column, $post_id) {
  if ($column !== 'manual_file') return;

  $file_id = (int) get_post_meta($post_id, '_operation_manual_file_id', true);

  if (!$file_id) {
    echo '未登録';
    return;
  }

  $file_url = wp_get_attachment_url($file_id);
  $file_name = basename((string) get_attached_file($file_id));

  if (!$file_url) {
    echo '未登録';
    return;
  }

  printf(
    '<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>',
    esc_url($file_url),
    esc_html($file_name ?: 'ファイルを開く')
  );
}, 10, 2);

add_action('admin_enqueue_scripts', function ($hook) {
  global $post_type;

  if (!in_array($hook, ['post.php', 'post-new.php'], true) || $post_type !== 'operation_manual') {
    return;
  }

  wp_enqueue_media();
  wp_add_inline_script('jquery', "
    jQuery(function($) {
      const fileIdInput = $('#operation-manual-file-id');
      const fileName = $('#operation-manual-file-name');
      const removeButton = $('#operation-manual-file-remove');
      let mediaFrame;

      $('#operation-manual-file-select').on('click', function(event) {
        event.preventDefault();

        if (mediaFrame) {
          mediaFrame.open();
          return;
        }

        mediaFrame = wp.media({
          title: 'マニュアルファイルを選択',
          button: {
            text: 'このファイルを使用'
          },
          multiple: false
        });

        mediaFrame.on('select', function() {
          const attachment = mediaFrame.state().get('selection').first().toJSON();
          fileIdInput.val(attachment.id);
          fileName.html('<a href=\"' + attachment.url + '\" target=\"_blank\" rel=\"noopener noreferrer\">' + attachment.filename + '</a>');
          removeButton.prop('disabled', false);
        });

        mediaFrame.open();
      });

      removeButton.on('click', function(event) {
        event.preventDefault();
        fileIdInput.val('');
        fileName.text('未選択');
        removeButton.prop('disabled', true);
      });
    });
  ");
});

/* =========================
 * 便利関数
 * ========================= */

function temp_path()    { echo esc_url(get_template_directory_uri()); }
function assets_path()  { echo esc_url(get_template_directory_uri() . '/assets'); }
function img_path()     { echo esc_url(get_template_directory_uri() . '/assets/img'); }
function uploads_path() { echo esc_url(wp_upload_dir()['baseurl']); }
function page_path($page = "") {
  echo esc_url(home_url(trailingslashit($page)));
}
