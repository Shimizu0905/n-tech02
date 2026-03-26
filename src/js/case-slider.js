// 事例紹介スライダー（Swiper）
document.addEventListener('DOMContentLoaded', function () {
  // 実績（works）
  if (document.querySelector('.p-works__swiper')) {
    new Swiper('.p-works__swiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: '.p-works__pagination',
        clickable: true,
      },
      navigation: {
        prevEl: '.p-works__arrow--prev',
        nextEl: '.p-works__arrow--next',
      },
    });
  }

  // お客様の声（voice）
  if (document.querySelector('.p-voice__swiper')) {
    new Swiper('.p-voice__swiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: '.p-voice__pagination',
        clickable: true,
      },
      navigation: {
        prevEl: '.p-voice__arrow--prev',
        nextEl: '.p-voice__arrow--next',
      },
    });
  }

  // 信頼の証モーダル（SP拡大表示）
  var certImg = document.getElementById('js-trust-cert');
  var modal = document.getElementById('js-trust-modal');
  if (certImg && modal) {
    var overlay = modal.querySelector('.p-trust__modal-overlay');
    var closeBtn = modal.querySelector('.p-trust__modal-close');

    certImg.addEventListener('click', function () {
      if (window.innerWidth < 768) {
        modal.classList.add('is-open');
        document.body.classList.add('no-scroll');
      }
    });

    function closeTrustModal() {
      modal.classList.remove('is-open');
      document.body.classList.remove('no-scroll');
    }

    if (overlay) overlay.addEventListener('click', closeTrustModal);
    if (closeBtn) closeBtn.addEventListener('click', closeTrustModal);
  }
});
