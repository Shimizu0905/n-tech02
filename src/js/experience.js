// Experience ルート切り替え
// タブと下のルート見出しが一体化して見えるUI実装
jQuery(function ($) {
  const $experience = $('.p-experience');
  if (!$experience.length) return;

  $experience.on('click', '.p-experience__route-btn', function () {
    const $btn = $(this);
    const route = $btn.data('route'); // habit / result

    // タブ状態
    $experience.find('.p-experience__route-btn')
      .removeClass('is-active')
      .attr('aria-selected', 'false');

    $btn.addClass('is-active').attr('aria-selected', 'true');

    // パネル状態
    $experience.find('.p-experience__route')
      .removeClass('is-active');

    $experience.find('.p-experience__route--' + route)
      .addClass('is-active');

    // 親状態（色連動用）
    $experience.removeClass('is-habit is-result').addClass('is-' + route);
  });

  // 初期状態（HTMLで is-active を付けた方に合わせる）
  if ($experience.find('.p-experience__route--result').hasClass('is-active')) {
    $experience.addClass('is-result');
  } else {
    $experience.addClass('is-habit');
  }
});
