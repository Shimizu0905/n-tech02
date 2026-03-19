import '../scss/style.scss';

/* =========================
 * jQuery
 * ========================= */
jQuery(function ($) {
  // ハンバーガーメニュー
  $(".js-hamburger").on('click', function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-overlay").toggleClass("is-active");
    $(".js-drawer").toggleClass("is-active");
    $(".js-header").toggleClass("is-active");
    $("body").toggleClass("no-scroll");
  });

  // オーバーレイクリック（メニューを閉じる）
  $(".js-overlay").on('click', function () {
    $(".js-hamburger").removeClass("is-active");
    $(".js-overlay").removeClass("is-active");
    $(".js-drawer").removeClass("is-active");
    $(".js-header").removeClass("is-active");
    $("body").removeClass("no-scroll");
  });

  // ドロワーメニュー内リンククリック（メニューを閉じる）
  $(".js-drawer a").on('click', function () {
    $(".js-hamburger").removeClass("is-active");
    $(".js-overlay").removeClass("is-active");
    $(".js-drawer").removeClass("is-active");
    $(".js-header").removeClass("is-active");
    $("body").removeClass("no-scroll");
  });

  // PC幅リサイズ時にメニューを閉じる
  $(window).on('resize', function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-overlay").removeClass("is-active");
      $(".js-drawer").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $("body").removeClass("no-scroll");
    }
  });

  // スクロールアニメーション
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    // fadeUP
    $('.js-fadeUP').each(function () {
      if (scroll > $(this).offset().top - windowHeight + 100) {
        $(this).addClass('is-show');
      }
    });

    // underline-expand
    $(".underline-expand").each(function () {
      if (scroll > $(this).offset().top - windowHeight) {
        $(this).addClass('is-active');
      }
    });
  });
});

/* =========================
 * Vanilla JS
 * ========================= */
document.addEventListener('DOMContentLoaded', function () {
  initFAQ();
  initRecruitTabs();
  initPrivacyModal();
  initContactFormSwitch();
  initWorkHistoryFields();
  initQualificationFields();
  initAttachmentFields();
});

// FAQアコーディオン
function initFAQ() {
  var faqItems = document.querySelectorAll('.p-faq__content-item');

  faqItems.forEach(function (item) {
    var title = item.querySelector('.p-faq__content-item-title');
    var button = item.querySelector('.p-faq__content-item-title-icon');
    if (!title || !button) return;

    function toggleFAQ() {
      var isOpen = item.classList.toggle('p-faq__content-item--open');
      button.setAttribute('aria-label', isOpen ? '閉じる' : '開く');
    }

    title.addEventListener('click', toggleFAQ);
    button.addEventListener('click', function (e) {
      e.stopPropagation();
      toggleFAQ();
    });
  });
}