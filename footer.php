<footer id="footer" class="p-footer">
  <div class="p-footer__copyright">
    <small>Copyright © 2025 N-tech All Rights Reserved.</small>
  </div>
</footer>

<!-- 追従フッター（スマホ用） -->
<div class="p-sticky-footer">
  <a href="#simulation" class="p-sticky-footer__btn p-sticky-footer__btn--simulation">
    <div class="p-sticky-footer__content">
      <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/header-icon-simulation.png')); ?>" alt="" class="p-sticky-footer__icon">
      <span class="p-sticky-footer__label">かんたん料金シミュレーション</span>
    </div>
  </a>
  <a href="tel:03-6679-4489" class="p-sticky-footer__btn p-sticky-footer__btn--tel">
    <div class="p-sticky-footer__content">
      <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/sp-tel-icon.png')); ?>" alt="" class="p-sticky-footer__icon">
      <span class="p-sticky-footer__label">お問い合わせ<br>（電話）</span>
    </div>
  </a>
  <a href="#contact" class="p-sticky-footer__btn p-sticky-footer__btn--form">
    <div class="p-sticky-footer__content">
      <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/sp-mail-icon.png')); ?>" alt="" class="p-sticky-footer__icon">
      <span class="p-sticky-footer__label">お問い合わせ<br>（メール）</span>
    </div>
  </a>
</div>

<?php wp_footer(); ?>
</div>

</body>
</html>
