<?php
/*
Template Name: トップページ
*/
get_header();
$page_id = get_the_ID();
?>
<main>
  <section class="p-fv">
    <div class="p-fv__bg">
      <picture>
        <source srcset="<?php echo esc_url(get_theme_file_uri('./assets/images/fv/fv-sp.png')); ?>" media="(max-width: 425px)">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/fv/fv.png')); ?>" alt="東京・江戸川区の解体工事専門N-tech（エヌテック）｜補助金活用で解体費用を大幅削減" class="p-fv__img">
      </picture>
    </div>
    <div class="p-fv__inner">
      <div class="p-fv__content">
        <h2 class="p-fv__title">
          <span class="p-fv__title-line">補助金活用で解体費用のご負担を</span>
          <span class="p-fv__title-line p-fv__title-line--highlight">大幅軽減。</span>
          <span class="p-fv__title-line">申請から近隣対策まで、</span>
          <span class="p-fv__title-line-group">
            <span class="p-fv__title-line p-fv__title-line--bg-black">すべてN-techに</span>
            <span class="p-fv__title-line p-fv__title-line--bg-black">お任せください。</span>
          </span>
        </h2>
      </div>
    </div>
  </section>
  <section class="p-highlight">
    <div class="p-highlight__inner">
      <h2 class="p-highlight__title c-section-title">補助金申請フルサポート</h2>
      <p class="p-highlight__text">自己負担を最小限に留めるご提案</p>
      <p class="p-highlight__highlight">
        <span class="p-highlight__highlight-large">450万円→実質300万円</span><span class="p-highlight__highlight-small">の</span><br class="sm-show"><span class="p-highlight__highlight-large">削減実績</span><span class="p-highlight__highlight-small">あり</span>
      </p>
    </div>
  </section>
  <section class="p-about" style="background-image: url('<?php echo esc_url(get_theme_file_uri('./assets/images/about/about-bg.png')); ?>');">
    <div class="p-about__inner">
      <div class="p-about__content">
        <p class="p-about__text">
          日本人スタッフによる<br>
          徹底した現場管理と、<br>
          23区内の複雑なアスベスト対応も<br>
          完全自社完結。
        </p>
      </div>
      <div class="p-about__graph">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about/about.png')); ?>" alt="東京・江戸川区の解体費用｜補助金活用で自己負担金約33%削減の比較グラフ" class="p-about__graph-img" width="240" height="300" loading="lazy" decoding="async">
      </div>
    </div>
  </section>
  <section class="p-worries" id="worries">
    <div class="p-worries__inner">
      <div class="p-worries__content">
        <h2 class="p-worries__title">
          <span>近年、こんなお悩み相談が</span>
          <span>急増しています！</span>
        </h2>
        <div class="p-worries__list">
          <div class="p-worries__item">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/worries-01.png')); ?>" alt="解体工事の見積りや営業への不安" class="p-worries__img">
            <p class="p-worries__text">見積もりを頼んだら、<br>しつこく営業されそうで不安。</p>
          </div>
          <div class="p-worries__item">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/worries-02.png')); ?>" alt="解体工事の補助金申請手続きの難しさ" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
            <p class="p-worries__text">補助金があるのは知っているが、<br>手続きが難しくて諦めている。</p>
          </div>
          <div class="p-worries__item">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/worries-03.png')); ?>" alt="東京での解体工事トラブル・近隣問題への不安" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
            <p class="p-worries__text">アスベストや近隣クレーム、<br>追加費用のトラブルが怖い。</p>
          </div>
        </div>
      </div>
      <div class="p-worries__bottom">
        <div class="p-worries__bottom-inner">
          <p class="p-worries__band">
            その不安、N-techがすべて<span class="p-worries__band-accent">解消</span>します。
          </p>
          <p class="p-worries__band">お客様に動いていただくのは最小限。</p>
          <p class="p-worries__band p-worries__band--full sm-none">
            私たちは<span class="p-worries__band-accent">「手離れの良さ」</span>と<span class="p-worries__band-accent">「安心」</span>を提供します。
          </p>
          <p class="p-worries__band p-worries__band--full p-worries__band--wrap sm-show">
            <span class="p-worries__band-line">私たちは<span class="p-worries__band-accent">「手離れの良さ」</span>と<span class="p-worries__band-accent">「安心」</span>を</span>
            <span class="p-worries__band-line">提供します。</span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-reason">
    <div class="p-reason__inner">
      <h2 class="p-reason__title c-section-title">N-techが選ばれる3つの理由</h2>
      <div class="p-reason__list">
        <div class="p-reason__item">
          <div class="p-reason__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/reason/Rectangle 68.png')); ?>" alt="N-techの補助金申請フルサポート｜解体費用の負担を軽減" class="p-reason__img">
          </div>
          <div class="p-reason__body">
            <h3 class="p-reason__heading">補助金申請を「完全無料」で<br>フルサポート</h3>
            <p class="p-reason__text">専門知識が必要な行政手続きをすべてサポート。450万円の物件で150万円の負担減に成功した事例も。</p>
          </div>
        </div>
        <div class="p-reason__item">
          <div class="p-reason__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/reason/28668760_m 1.png')); ?>" alt="東京・江戸川区の解体工事｜日本人スタッフによる現場管理" class="p-reason__img">
          </div>
          <div class="p-reason__body">
            <h3 class="p-reason__heading">日本人による徹底した現場管理<br>と「手離れの良さ」</h3>
            <p class="p-reason__text">レスポンスの速さ、清潔感、言葉遣いを徹底。近隣対策から役所へのオンライン報告まで、支援します。</p>
          </div>
        </div>
        <div class="p-reason__item">
          <div class="p-reason__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/reason/1768 3.png')); ?>" alt="アスベスト調査・特殊解体もN-tech（エヌテック）にお任せ" class="p-reason__img">
          </div>
          <div class="p-reason__body">
            <h3 class="p-reason__heading">アスベスト・特殊解体の<br>プロ集団</h3>
            <p class="p-reason__text">11階建て以上のビルを除き、あらゆる建物に対応。狭小地や地下付き物件など、他社が断る難工事こそ私たちの本領です。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- 透明性のある価格案内 -->
    <section class="p-price" id="price">
    <div class="p-price__inner">
      <div class="p-price__card">
        <h2 class="p-price__title c-section-title">透明性のある価格案内</h2>
        <table class="p-price__table">
          <thead>
            <tr>
              <th class="p-price__th">建築物</th>
              <th class="p-price__th">坪単価（税込）</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="p-price__td p-price__td--type">木　造</td>
              <td class="p-price__td p-price__td--cost">￥40,000〜60,000</td>
            </tr>
            <tr>
              <td class="p-price__td p-price__td--type">鉄骨造</td>
              <td class="p-price__td p-price__td--cost">￥50,000〜70,000</td>
            </tr>
            <tr>
              <td class="p-price__td p-price__td--type">ＲＣ造</td>
              <td class="p-price__td p-price__td--cost">￥60,000〜90,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

    <!-- かんたん料金シミュレーション -->
    <section class="p-simulation" id="simulation">
      <div class="p-simulation__inner">
        <p class="p-simulation__lead">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/simulation/simulation-lead.svg')); ?>" alt="解体費用の見積りシミュレーション｜まずはお気軽に1分でわかる" class="p-simulation__lead-img" loading="lazy" decoding="async">
        </p>
        <a href="https://n-techgroup.com/simulator/" class="p-simulation__btn">
          かんたん料金<br class="md-show">シミュレーション
          <div class="p-simulation__icon">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('./assets/images/simulation/simulation-sp.png')); ?>" media="(max-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/simulation/simulation.png')); ?>" alt="" class="p-simulation__icon-img" loading="lazy" decoding="async">
            </picture>
          </div>
        </a>
      </div>
    </section>

  <!-- 安心の約束 -->
  <section class="p-promise">
    <div class="p-promise__inner">
      <h2 class="p-promise__title c-section-title">安心の約束</h2>
      <ul class="p-promise__list">
        <li class="p-promise__item">
          <span class="p-promise__icon">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/promise/check-01.png')); ?>" alt="" class="p-promise__icon-img" loading="lazy" decoding="async">
          </span>
          <p class="p-promise__text">「見積条件表」を別紙で添付します。</p>
        </li>
        <li class="p-promise__item">
          <span class="p-promise__icon">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/promise/check-02.png')); ?>" alt="" class="p-promise__icon-img" loading="lazy" decoding="async">
          </span>
          <p class="p-promise__text">追加費用が発生する条件（地中埋設物など）を事前に明確化。</p>
        </li>
        <li class="p-promise__item">
          <span class="p-promise__icon">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/promise/check-03.png')); ?>" alt="" class="p-promise__icon-img" loading="lazy" decoding="async">
          </span>
          <p class="p-promise__text">不透明な請求は一切行いません。</p>
        </li>
      </ul>
    </div>
  </section>



  <!-- 信頼の証 -->
  <section class="p-trust">
    <div class="p-trust__bg">
      <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/trust/trust-vector.svg')); ?>" alt="" class="p-trust__bg-img" aria-hidden="true">
    </div>
    <div class="p-trust__inner">
      <h2 class="p-trust__title c-section-title">信頼の証</h2>
      <div class="p-trust__cert">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/trust/trust-cert.png')); ?>" alt="N-tech（エヌテック）の保有資格・損害賠償保険加入済み証明｜解体工事の信頼の証" class="p-trust__cert-img" loading="lazy" decoding="async" id="js-trust-cert">
        <p class="p-trust__cert-text">保有資格：解体施工技士、石綿作業主任者、アスベスト調査士 等<br>損害賠償保険加入済み</p>
      </div>
    </div>
  </section>
    <!-- 事例紹介 -->
    <?php
    $works_query = new WP_Query([
      'post_type'      => 'works',
      'posts_per_page' => -1,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      'post_status'    => 'publish',
    ]);
    ?>
    <?php if ($works_query->have_posts()) : ?>
    <section class="p-works" id="works">
      <div class="p-works__inner">
        <h2 class="p-works__title c-section-title">事例紹介</h2>
        <div class="p-works__slider-wrap">
          <div class="swiper p-works__swiper">
            <div class="swiper-wrapper">
              <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                <?php
                  $post_id      = get_the_ID();
                  $before_image = SCF::get('before_image', $post_id);
                  $after_image  = SCF::get('after_image', $post_id);
                  $area         = SCF::get('area', $post_id);
                  $target_type  = SCF::get('target_type', $post_id);
                  $structure    = SCF::get('structure', $post_id);
                  $building_age = SCF::get('building_age', $post_id);
                  $issue        = SCF::get('issue', $post_id);
                  $proposal     = SCF::get('proposal', $post_id);
                ?>
                <div class="swiper-slide">
                  <article class="p-works__item">
                    <div class="p-works__images">
                      <div class="p-works__image -before">
                        <?php if ($before_image) : ?>
                          <?php echo wp_get_attachment_image($before_image, 'large', false, ['class' => 'p-works__img', 'loading' => 'lazy', 'decoding' => 'async']); ?>
                        <?php endif; ?>
                        <span class="p-works__image-label">着工前</span>
                      </div>
                      <div class="p-works__image -after">
                        <?php if ($after_image) : ?>
                          <?php echo wp_get_attachment_image($after_image, 'large', false, ['class' => 'p-works__img', 'loading' => 'lazy', 'decoding' => 'async']); ?>
                        <?php endif; ?>
                        <span class="p-works__image-label">完工</span>
                      </div>
                    </div>
                    <dl class="p-works__info">
                      <?php if ($area) : ?>
                      <div class="p-works__info-row">
                        <dt class="p-works__info-label">エリア</dt>
                        <dd class="p-works__info-value"><?php echo esc_html($area); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($target_type) : ?>
                      <div class="p-works__info-row">
                        <dt class="p-works__info-label">対象物</dt>
                        <dd class="p-works__info-value"><?php echo esc_html($target_type); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($structure) : ?>
                      <div class="p-works__info-row">
                        <dt class="p-works__info-label">建造物</dt>
                        <dd class="p-works__info-value"><?php echo esc_html($structure); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($building_age) : ?>
                      <div class="p-works__info-row">
                        <dt class="p-works__info-label">築年数</dt>
                        <dd class="p-works__info-value"><?php echo esc_html($building_age); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($issue) : ?>
                      <div class="p-works__info-row">
                        <dt class="p-works__info-label">お困りごと</dt>
                        <dd class="p-works__info-value"><?php echo nl2br(esc_html($issue)); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($proposal) : ?>
                      <div class="p-works__info-row">
                        <dt class="p-works__info-label">提案内容</dt>
                        <dd class="p-works__info-value"><?php echo nl2br(esc_html($proposal)); ?></dd>
                      </div>
                      <?php endif; ?>
                    </dl>
                  </article>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
          <div class="swiper-pagination p-works__pagination"></div>
          <button type="button" class="p-works__arrow p-works__arrow--prev" aria-label="前へ">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/arrow-black.svg')); ?>" alt="" class="p-works__arrow-img" width="43" height="43" decoding="async">
          </button>
          <button type="button" class="p-works__arrow p-works__arrow--next" aria-label="次へ">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/arrow-black.svg')); ?>" alt="" class="p-works__arrow-img" width="43" height="43" decoding="async">
          </button>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

  <!-- 会社概要 -->
  <?php
    $company_name     = SCF::get('company_name', $page_id);
    $company_address  = SCF::get('company_address', $page_id);
    $company_est      = SCF::get('company_established', $page_id);
    $company_ceo      = SCF::get('company_ceo', $page_id);
    $company_emp      = SCF::get('company_employees', $page_id);
    $company_lic      = SCF::get('company_licenses', $page_id);
    $company_area     = SCF::get('company_area', $page_id);
    $company_biz      = SCF::get('company_business', $page_id);
    $company_permit   = SCF::get('company_permit', $page_id);
    $company_access   = SCF::get('company_access', $page_id);
    $company_map      = SCF::get('company_map', $page_id);
  ?>
  <section class="p-company" id="company">
    <div class="p-company__inner">
      <h2 class="p-company__title c-section-title">会社概要</h2>
      <div class="p-company__content">
        <dl class="p-company__table">
          <div class="p-company__row">
            <dt class="p-company__label">会　社　名</dt>
            <dd class="p-company__value"><?php echo esc_html($company_name ?: '株式会社N-tech'); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">所　在　地</dt>
            <dd class="p-company__value"><?php echo esc_html($company_address ?: '東京都江戸川区西小岩4-5-1'); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">設　　　立</dt>
            <dd class="p-company__value"><?php echo esc_html($company_est ?: '2021年10月26日'); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">代表取締役</dt>
            <dd class="p-company__value"><?php echo esc_html($company_ceo ?: '上村 直矢'); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">従 業 員 数</dt>
            <dd class="p-company__value"><?php echo esc_html($company_emp ?: '7名'); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">保 有 資 格</dt>
            <dd class="p-company__value"><?php echo nl2br(esc_html($company_lic ?: '建築施工管理技士 1名／解体施工技士 2名／車両系建設機械 2名／ガス溶断技能講習 2名／足場組立て作業主任者 2名／建築物石綿含有建材調査士 1名／工作物石綿事前調査者 1名／石綿作業主任者 4名')); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">対象エリア</dt>
            <dd class="p-company__value"><?php echo esc_html($company_area ?: '東京23区、関東近郊'); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">業 務 内 容</dt>
            <dd class="p-company__value"><?php echo nl2br(esc_html($company_biz ?: '解体工事／アスベスト撤去工事／リフォーム工事／改修工事／テナント工事／仮設工事')); ?></dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">許　認　可</dt>
            <dd class="p-company__value"><?php if ($company_permit) { echo nl2br(esc_html($company_permit)); } else { ?>一般建設業許可　<br class="md-show">東京都知事許可（般-7）第161249号<br>解体工事業、建築工事業、大工工事業、左官工事業、とび・土木工事業、<br class="md-none">石工事業、屋根工事業、タイル・れんが・ブロック工事業、<br class="md-none">鋼構造物工事業、鉄筋工事業、板金工事業、ガラス工事業、塗装工事業、<br class="md-none">防水工事業、内装仕上工事業、熱絶縁工事業、建具工事業、全17種<?php } ?></dd>
          </div>
          <div class="p-company__row p-company__row--access">
            <dt class="p-company__label">ア ク セ ス</dt>
            <dd class="p-company__value"><?php echo esc_html($company_access ?: '小岩駅北口より徒歩9分'); ?>
              <div class="p-company__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.486773119005!2d139.87625277579036!3d35.7388386725687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018857883496fef%3A0x49d4cc9a4798dea1!2z5qCq5byP5Lya56S-Ti10ZWNoKOOCqOODjOODhuODg-OCryl85rGf5oi45bed5Yy644Gu6Kej5L2T5qWt6ICF!5e0!3m2!1sja!2sjp!4v1774557836945!5m2!1sja!2sjp" class="p-company__map-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </section>

  <!-- 問合せ先CTA -->
  <section class="p-contact-cta">
    <div class="p-contact-cta__inner">
      <div class="p-contact-cta__card">
        <div class="p-contact-cta__header">
          <p class="p-contact-cta__catch">些細なお困りごともお気軽にご相談ください。</p>
        </div>
        <div class="p-contact-cta__body">
          <p class="p-contact-cta__hours">営業時間　10:00~17:00</p>
          <a href="tel:03-6679-4489" class="p-contact-cta__tel">03-6679-4489</a>
        </div>
      </div>
    </div>
  </section>

  <!-- お客様の声 -->
  <?php
  $voice_query = new WP_Query([
    'post_type'      => 'voice',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
  ]);
  ?>
  <?php if ($voice_query->have_posts()) : ?>
  <section class="p-voice" id="voice">
    <div class="p-voice__inner">
      <h2 class="p-voice__title c-section-title">お客様の声</h2>
      <div class="p-voice__slider-wrap">
        <div class="swiper p-voice__swiper">
          <div class="swiper-wrapper">
            <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
              <?php
                $vid        = get_the_ID();
                $voice_img      = SCF::get('voice_image', $vid);
                $voice_attr     = SCF::get('voice_attr', $vid);
                $voice_tag      = SCF::get('voice_tag', $vid);
                $voice_worry    = SCF::get('voice_worry', $vid);
                $voice_response = SCF::get('voice_response', $vid);
                $voice_comment  = SCF::get('voice_comment', $vid);
              ?>
              <div class="swiper-slide">
                <article class="p-voice__card">
                  <div class="p-voice__card-img">
                    <?php if ($voice_img) : ?>
                      <?php echo wp_get_attachment_image($voice_img, 'large', false, ['class' => 'p-voice__card-photo', 'loading' => 'lazy', 'decoding' => 'async']); ?>
                    <?php endif; ?>
                  </div>
                  <div class="p-voice__card-body">
                    <div class="p-voice__card-header">
                      <h3 class="p-voice__card-title">
                        <?php the_title(); ?>
                        <?php if ($voice_attr) : ?>
                          <br><span class="p-voice__card-attr">（<?php echo esc_html($voice_attr); ?>）</span>
                        <?php endif; ?>
                      </h3>
                      <?php if ($voice_tag) : ?>
                        <span class="p-voice__tag"><?php echo esc_html($voice_tag); ?></span>
                      <?php endif; ?>
                    </div>
                    <dl class="p-voice__detail">
                      <?php if ($voice_worry) : ?>
                      <div class="p-voice__detail-row">
                        <dt class="p-voice__detail-label">お客様の悩み</dt>
                        <dd class="p-voice__detail-text"><?php echo nl2br(esc_html($voice_worry)); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($voice_response) : ?>
                      <div class="p-voice__detail-row">
                        <dt class="p-voice__detail-label">N-techの対応</dt>
                        <dd class="p-voice__detail-text"><?php echo nl2br(esc_html($voice_response)); ?></dd>
                      </div>
                      <?php endif; ?>
                      <?php if ($voice_comment) : ?>
                      <div class="p-voice__detail-row">
                        <dt class="p-voice__detail-label">感想</dt>
                        <dd class="p-voice__detail-text"><?php echo nl2br(esc_html($voice_comment)); ?></dd>
                      </div>
                      <?php endif; ?>
                    </dl>
                  </div>
                </article>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        <div class="swiper-pagination p-voice__pagination"></div>
        <button type="button" class="p-voice__arrow p-voice__arrow--prev" aria-label="前へ">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/arrow-black.svg')); ?>" alt="" class="p-voice__arrow-img" width="43" height="43" decoding="async">
        </button>
        <button type="button" class="p-voice__arrow p-voice__arrow--next" aria-label="次へ">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/arrow-black.svg')); ?>" alt="" class="p-voice__arrow-img" width="43" height="43" decoding="async">
        </button>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

  <!-- よくある質問 -->
  <?php
  $faq_query = new WP_Query([
    'post_type'      => 'faq',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
  ]);
  ?>
  <?php if ($faq_query->have_posts()) : ?>
  <section class="p-faq" id="faq">
    <div class="p-faq__inner">
      <h2 class="p-faq__title c-section-title c-section-title--white">よくある質問</h2>
      <div class="p-faq__list">
        <?php while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
          <?php $faq_answer = SCF::get('faq_answer', get_the_ID()); ?>
          <div class="p-faq__item">
            <div class="p-faq__question">
              <span class="p-faq__q-mark">Q</span>
              <p class="p-faq__q-text"><?php the_title(); ?></p>
            </div>
            <?php if ($faq_answer) : ?>
              <div class="p-faq__answer">
                <span class="p-faq__a-mark">A</span>
                <p class="p-faq__a-text"><?php echo nl2br(esc_html($faq_answer)); ?></p>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

  <!-- 完工までの安心の6ステップ -->
  <section class="p-flow">
    <div class="p-flow__inner">
      <div class="p-flow__header">
        <h2 class="p-flow__title c-section-title"><span>完工までの安心の</span><span>6ステップ</span></h2>
        <p class="p-flow__lead">お客様に動いていただく時間は最小限に留めます。<br>手続きのストレスなく、更地までスムーズに進めるための流れです。</p>
      </div>
      <div class="p-flow__list">
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/step/step-01.png')); ?>" alt="解体工事のご予約・無料相談" class="p-flow__img" loading="lazy" decoding="async">
          </div>
          <div class="p-flow__item-body">
            <span class="p-flow__step-label">STEP 01</span>
            <h3 class="p-flow__item-title">ご予約・無料相談</h3>
            <p class="p-flow__item-text">Webフォームまたはお電話にてお問い合わせください。日時調整機能により、お客様のご都合の良いタイミングでスムーズに相談予約が可能です。オンラインでのご相談も承っております。</p>
          </div>
        </div>
        <div class="p-flow__arrow" aria-hidden="true"></div>
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/step/step-02.png')); ?>" alt="現地調査・補助金診断" class="p-flow__img" loading="lazy" decoding="async">
          </div>
          <div class="p-flow__item-body">
            <span class="p-flow__step-label">STEP 02</span>
            <h3 class="p-flow__item-title">現地調査・補助金診断・ヒアリング</h3>
            <p class="p-flow__item-text">管理職員が現地へ伺います。補助金がいくら適用されるかの診断もその場で行います。私たちが大切にしているのは、言葉遣いや清潔感を含めたコミュニケーションです。解体後のお悩みまで含めて、スピーディーに解決策を提示します。</p>
          </div>
        </div>
        <div class="p-flow__arrow" aria-hidden="true"></div>
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/step/step-03.png')); ?>" alt="解体費用の見積り提出" class="p-flow__img" loading="lazy" decoding="async">
          </div>
          <div class="p-flow__item-body">
            <span class="p-flow__step-label">STEP 03</span>
            <h3 class="p-flow__item-title">お見積りの提出</h3>
            <p class="p-flow__item-text">透明性の高いお見積書をご提示します。N-techでは、後から不明瞭な請求が発生しないよう、複数名によるチェックを実施。追加費用の条件を明記した「見積条件表」を別紙で必ずお渡ししています。</p>
          </div>
        </div>
        <div class="p-flow__arrow" aria-hidden="true"></div>
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/step/step-04.png')); ?>" alt="解体工事のご契約" class="p-flow__img" loading="lazy" decoding="async">
          </div>
          <div class="p-flow__item-body">
            <span class="p-flow__step-label">STEP 04</span>
            <h3 class="p-flow__item-title">ご契約</h3>
            <p class="p-flow__item-text">内容にご納得いただけましたら、正式なご契約となります。ここまでのプロセスで「頼まなければいけない」といった無理な勧誘は一切ございません。安心してお見積りをご比較ください。</p>
          </div>
        </div>
        <div class="p-flow__arrow" aria-hidden="true"></div>
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/step/step-05.png')); ?>" alt="補助金申請・行政手続きサポート" class="p-flow__img" loading="lazy" decoding="async">
          </div>
          <div class="p-flow__item-body">
            <span class="p-flow__step-label">STEP 05</span>
            <h3 class="p-flow__item-title">補助金申請・行政手続き</h3>
            <p class="p-flow__item-text">煩雑な補助金申請や、環境省へのオンライン報告（ID発行・申請）、各自治体への届出はすべて弊社がサポートします。申請はフルサポートですので、お客様の事務負担はほとんどありません。</p>
          </div>
        </div>
        <div class="p-flow__arrow" aria-hidden="true"></div>
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/step/step-06.png')); ?>" alt="近隣対策・解体工事着工" class="p-flow__img" loading="lazy" decoding="async">
          </div>
          <div class="p-flow__item-body">
            <span class="p-flow__step-label">STEP 06</span>
            <h3 class="p-flow__item-title">近隣対策・着工</h3>
            <p class="p-flow__item-text">近隣住民様へのご挨拶やクレーム対応まで、すべて弊社の日本人スタッフが責任を持って行います。狭小地や特殊な条件でも、最適な養生と施工計画で、隣接する建物を守りながら安全に完工いたします。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- お問い合わせフォーム -->
  <section class="p-contact-form" id="contact">
    <div class="p-contact-form__inner">
      <h2 class="p-contact-form__title c-section-title">お問い合わせフォーム</h2>
      <?php echo do_shortcode('[contact-form-7 id="99d556f" title="お問い合わせ"]'); ?>
    </div>
  </section>
</main>

<!-- 信頼の証モーダル（z-index問題回避のためbody直下に配置） -->
<div class="p-trust__modal" id="js-trust-modal">
  <div class="p-trust__modal-overlay"></div>
  <div class="p-trust__modal-content">
    <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/trust/trust-cert.png')); ?>" alt="N-tech（エヌテック）の保有資格・損害賠償保険加入済み証明｜解体工事の信頼の証" class="p-trust__modal-img">
    <button type="button" class="p-trust__modal-close" aria-label="閉じる">&times;</button>
  </div>
</div>

<script src="<?php echo esc_url(get_theme_file_uri('/assets/js/case-slider.js')); ?>?ver=<?php echo filemtime(get_theme_file_path('/assets/js/case-slider.js')); ?>" defer></script>
<?php get_footer(); ?>
