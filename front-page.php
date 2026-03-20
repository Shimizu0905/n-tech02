<?php
/*
Template Name: トップページ
*/
get_header();
?>
<main>
<section class="p-fv">
  <div class="p-fv__bg">
    <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/fv/fv.png')); ?>" alt="解体現場での作業風景。補助金活用で解体費用の負担を軽減するN-techのサービス" class="p-fv__img" width="1920" height="1080" decoding="async">
  </div>
  <div class="p-fv__inner">
    <div class="p-fv__content">
      <h2 class="p-fv__title">
        <span class="p-fv__title-line">補助金活用で解体費用のご負担を</span>
        <span class="p-fv__title-line p-fv__title-line--highlight">大幅軽減。</span>
        <span class="p-fv__title-line">申請から近隣対策まで、</span>
        <span class="p-fv__title-line p-fv__title-line--bg-black">すべてN-techに</span>
        <span class="p-fv__title-line p-fv__title-line--bg-black">お任せください。</span>
      </h2>
    </div>
  </div>
</section>
  <section class="p-highlight">
    <div class="p-highlight__inner">
      <h2 class="p-highlight__title">補助金申請フルサポート</h2>
      <p class="p-highlight__text">自己負担を最小限に留めるご提案</p>
      <p class="p-highlight__highlight">
        <span class="p-highlight__highlight-large">450万円→実質300万円</span><span class="p-highlight__highlight-small">の</span><span class="p-highlight__highlight-large">削減実績</span><span class="p-highlight__highlight-small">あり</span>
      </p>
    </div>
  </section>
  <section class="p-worries">
    <div class="p-worries__inner">
      <div class="p-worries__content">
        <h2 class="p-worries__title">近年、こんなお悩み相談が急増しています！</h2>
        <div class="p-worries__list">
          <div class="p-worries__item">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/image 19.png')); ?>" alt="見積もりや営業への不安" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
          <p class="p-worries__text">見積もりを頼んだら、<br>しつこく営業されそうで不安。</p>
          </div>
          <div class="p-worries__item">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/image 22.png')); ?>" alt="補助金手続きの難しさ" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
          <p class="p-worries__text">補助金があるのは知っているが、<br>手続きが難しくて諦めている。</p>
          </div>
          <div class="p-worries__item">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/image 23.png')); ?>" alt="解体トラブルへの不安" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
          <p class="p-worries__text">アスベストや近隣クレーム、<br>追加費用のトラブルが怖い。</p>
          </div>
        </div>
      </div>
      <div class="p-worries__bottom">
        <div class="p-worries__bottom-inner">
          <p class="p-worries__band">見積もり・補助金・トラブル対策</p>
          <p class="p-worries__band">そのすべて</p>
          <p class="p-worries__band p-worries__band--highlight">
            すべて<span class="p-worries__band-accent">N-tech</span>にお任せください
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-support">
  <div class="p-support__inner">

    <div class="p-support__content">
      <p class="p-support__text">
        日本人スタッフによる<br>
        徹底した現場管理と、<br>
        23区内の複雑なアスベスト対応も<br>
        完全自社完結。
      </p>
    </div>

    <div class="p-support__graph">
      <div class="p-support__bar p-support__bar--gray">
        <span class="p-support__label">自己負担金</span>
      </div>

      <div class="p-support__bar p-support__bar--yellow">
        <div class="p-support__bubble">
          約<span>33%</span><br>削減
        </div>
      </div>
    </div>

  </div>
</section>
</main>

<?php get_footer(); ?>
