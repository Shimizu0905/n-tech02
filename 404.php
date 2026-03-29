<?php get_header(); ?>
<main class="l-main">
  <section class="p-404">
    <div class="p-404__inner">
      <p class="p-404__code">404</p>
      <h1 class="p-404__title">お探しのページが見つかりませんでした</h1>
      <p class="p-404__text">ページが削除されたか、URLが変更された可能性があります。<br>お手数ですが、トップページからお探しください。</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__btn">トップページへ戻る</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
