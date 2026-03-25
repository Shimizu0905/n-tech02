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
});
