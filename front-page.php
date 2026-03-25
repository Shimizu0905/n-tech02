<?php
/*
Template Name: トップページ
*/
get_header();
?>
<main>
  <section class="p-fv">
    <div class="p-fv__bg">
      <picture>
        <source srcset="<?php echo esc_url(get_theme_file_uri('./assets/images/fv/fv-sp.png')); ?>" media="(max-width: 425px)">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/fv/fv.png')); ?>" alt="解体現場での作業風景。補助金活用で解体費用の負担を軽減するN-techのサービス" class="p-fv__img">
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
      <h2 class="p-highlight__title">補助金申請フルサポート</h2>
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
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/about/about.png')); ?>" alt="自己負担金約33%削減の比較グラフ" class="p-about__graph-img" width="240" height="300" loading="lazy" decoding="async">
      </div>
    </div>
  </section>
  <section class="p-worries">
    <div class="p-worries__inner">
      <div class="p-worries__content">
        <h2 class="p-worries__title">
          <span>近年、こんなお悩み相談が</span>
          <span>急増しています！</span>
        </h2>
        <div class="p-worries__list">
          <div class="p-worries__item">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/worries-01.png')); ?>" alt="見積もりや営業への不安" class="p-worries__img">
            <p class="p-worries__text">見積もりを頼んだら、<br>しつこく営業されそうで不安。</p>
          </div>
          <div class="p-worries__item">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/worries-02.png')); ?>" alt="補助金手続きの難しさ" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
            <p class="p-worries__text">補助金があるのは知っているが、<br>手続きが難しくて諦めている。</p>
          </div>
          <div class="p-worries__item">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/worries/worries-03.png')); ?>" alt="解体トラブルへの不安" class="p-worries__img" width="320" height="320" loading="lazy" decoding="async">
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
      <h2 class="p-reason__title">N-techが選ばれる3つの理由</h2>
      <div class="p-reason__list">
        <div class="p-reason__item">
          <div class="p-reason__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/reason/Rectangle 68.png')); ?>" alt="補助金申請のサポート" class="p-reason__img">
          </div>
          <div class="p-reason__body">
            <h3 class="p-reason__heading">補助金申請を「完全無料」で<br>フルサポート</h3>
            <p class="p-reason__text">専門知識が必要な行政手続きをすべてサポート。450万円の物件で150万円の負担減に成功した事例も。</p>
          </div>
        </div>
        <div class="p-reason__item">
          <div class="p-reason__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/reason/28668760_m 1.png')); ?>" alt="日本人による現場管理" class="p-reason__img">
          </div>
          <div class="p-reason__body">
            <h3 class="p-reason__heading">日本人による徹底した現場管理<br>と「手離れの良さ」</h3>
            <p class="p-reason__text">レスポンスの速さ、清潔感、言葉遣いを徹底。近隣対策から役所へのオンライン報告まで、支援します。</p>
          </div>
        </div>
        <div class="p-reason__item">
          <div class="p-reason__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/reason/1768 3.png')); ?>" alt="アスベスト・特殊解体" class="p-reason__img">
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
    <section class="p-price">
    <div class="p-price__inner">
      <div class="p-price__card">
        <h2 class="p-price__title">透明性のある価格案内</h2>
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
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/simulation/simulation-lead.svg')); ?>" alt="まずはお気軽に1分でわかる" class="p-simulation__lead-img" loading="lazy" decoding="async">
        </p>
        <a href="#contact" class="p-simulation__btn">かんたん料金シミュレーション</a>
        <div class="p-simulation__icon">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/company/simulation.png')); ?>" alt="" class="p-simulation__icon-img" loading="lazy" decoding="async">
        </div>
      </div>
    </section>

  <!-- 安心の約束 -->
  <section class="p-promise">
    <div class="p-promise__inner">
      <h2 class="p-promise__title">安心の約束</h2>
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
      <h2 class="p-trust__title">信頼の証</h2>
      <div class="p-trust__cert">
        <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/trust/trust-cert.png')); ?>" alt="保有資格・損害賠償保険加入済み証明" class="p-trust__cert-img" loading="lazy" decoding="async">
        <p class="p-trust__cert-text">保有資格：解体施工技士、石綿作業主任者、アスベスト調査士 等<br>損害賠償保険加入済み</p>
      </div>
    </div>
  </section>
    <!-- 事例紹介 -->
    <section class="p-case">
    <div class="p-case__inner">
      <h2 class="p-case__title">事例紹介</h2>
      <div class="p-case__card">
        <div class="p-case__img-wrap">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/company/case-01.png')); ?>" alt="事例紹介" class="p-case__img" loading="lazy" decoding="async">
        </div>
        <div class="p-case__body">
          <dl class="p-case__table">
            <div class="p-case__row">
              <dt class="p-case__label">エリア</dt>
              <dd class="p-case__value">東京都葛飾区</dd>
            </div>
            <div class="p-case__row">
              <dt class="p-case__label">対象物</dt>
              <dd class="p-case__value">一軒家</dd>
            </div>
            <div class="p-case__row">
              <dt class="p-case__label">建造物</dt>
              <dd class="p-case__value">木造2棟</dd>
            </div>
            <div class="p-case__row">
              <dt class="p-case__label">築年数</dt>
              <dd class="p-case__value">○年</dd>
            </div>
            <div class="p-case__row">
              <dt class="p-case__label">お困りごと</dt>
              <dd class="p-case__value">建物の解体、近隣住民への配慮</dd>
            </div>
            <div class="p-case__row">
              <dt class="p-case__label">提案内容</dt>
              <dd class="p-case__value">概算で○○万円（税込）</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- 完工までの安心の6ステップ -->
  <section class="p-flow">
    <div class="p-flow__inner">
      <div class="p-flow__header">
        <h2 class="p-flow__title">完工までの安心の6ステップ</h2>
        <p class="p-flow__lead">お客様に動いていただく時間は最小限に留めます。<br>手続きのストレスなく、更地までスムーズに進めるための流れです。</p>
      </div>
      <div class="p-flow__list">
        <div class="p-flow__item">
          <div class="p-flow__item-img">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow/step-01.png')); ?>" alt="" class="p-flow__img" loading="lazy" decoding="async">
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
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow/step-02.png')); ?>" alt="" class="p-flow__img" loading="lazy" decoding="async">
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
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow/step-03.png')); ?>" alt="" class="p-flow__img" loading="lazy" decoding="async">
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
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow/step-04.png')); ?>" alt="" class="p-flow__img" loading="lazy" decoding="async">
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
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow/step-05.png')); ?>" alt="" class="p-flow__img" loading="lazy" decoding="async">
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
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/flow/step-06.png')); ?>" alt="" class="p-flow__img" loading="lazy" decoding="async">
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



  <!-- お客様の声 -->
  <section class="p-voice">
    <div class="p-voice__inner">
      <h2 class="p-voice__title">お客様の声</h2>
      <div class="p-voice__card">
        <div class="p-voice__card-img">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/voice/voice-01.png')); ?>" alt="" class="p-voice__card-photo" loading="lazy" decoding="async">
        </div>
        <div class="p-voice__card-body">
          <div class="p-voice__card-header">
            <h3 class="p-voice__card-title">補助金を活用して、建て替え費用を賢く抑えられた<br>（個人・50代）</h3>
            <span class="p-voice__tag">解体作業</span>
          </div>
          <dl class="p-voice__detail">
            <div class="p-voice__detail-row">
              <dt class="p-voice__detail-label">お客様の悩み</dt>
              <dd class="p-voice__detail-text">親から相続した空き家の解体。見積もりを取ると450万円と言われ、費用の捻出に頭を抱えていました。</dd>
            </div>
            <div class="p-voice__detail-row">
              <dt class="p-voice__detail-label">N-techの対応</dt>
              <dd class="p-voice__detail-text">現地調査の際、すぐに適用可能な補助金を特定しました。</dd>
            </div>
            <div class="p-voice__detail-row">
              <dt class="p-voice__detail-label">感想</dt>
              <dd class="p-voice__detail-text">「手続きが難しそうで諦めていましたが、N-techさんにお願いして本当に良かったです。レスポンスも速く、安心してお任せできました」</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- 会社概要 -->
  <section class="p-company" id="company">
    <div class="p-company__inner">
      <h2 class="p-company__title">会社概要</h2>
      <div class="p-company__content">
        <dl class="p-company__table">
          <div class="p-company__row">
            <dt class="p-company__label">会　社　名</dt>
            <dd class="p-company__value">株式会社N-tech</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">所　在　地</dt>
            <dd class="p-company__value">東京都江戸川区西小岩4-5-1</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">設　　　立</dt>
            <dd class="p-company__value">2021年10月26日</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">代表取締役</dt>
            <dd class="p-company__value">上村 直矢</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">従 業 員 数</dt>
            <dd class="p-company__value">7名</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">保 有 資 格</dt>
            <dd class="p-company__value">建築施工管理技士 1名／解体施工技士 2名／車両系建設機械 2名／ガス溶断技能講習 2名／足場組立て作業主任者 2名／建築物石綿含有建材調査士 1名／工作物石綿事前調査者 1名／石綿作業主任者 4名</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">対象エリア</dt>
            <dd class="p-company__value">東京23区、関東近郊</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">業 務 内 容</dt>
            <dd class="p-company__value">解体工事／アスベスト撤去工事／リフォーム工事／改修工事／テナント工事／仮設工事</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">許　認　可</dt>
            <dd class="p-company__value">一般建設業許可 東京都知事許可（般-7）第161249号<br>解体工事業、建築工事業、大工工事業、左官工事業、とび・土木工事業、石工事業、屋根工事業、タイル・れんが・ブロック工事業、鋼構造物工事業、鉄筋工事業、板金工事業、ガラス工事業、塗装工事業、防水工事業、内装仕上工事業、熱絶縁工事業、建具工事業、全17種</dd>
          </div>
          <div class="p-company__row">
            <dt class="p-company__label">ア ク セ ス</dt>
            <dd class="p-company__value">小岩駅北口より徒歩9分</dd>
          </div>
        </dl>
        <div class="p-company__map">
          <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/company/map.png')); ?>" alt="アクセスマップ" class="p-company__map-img" loading="lazy" decoding="async">
        </div>
      </div>
    </div>
  </section>

  <!-- 問合せ先 -->
  <section class="p-contact-cta">
    <div class="p-contact-cta__inner">
      <div class="p-contact-cta__card">
        <div class="p-contact-cta__header">
          <p class="p-contact-cta__catch">些細なお困りごともお気軽にご相談ください。</p>
        </div>
        <div class="p-contact-cta__body">
          <a href="tel:0366794489" class="p-contact-cta__tel">03-6679-4489</a>
          <p class="p-contact-cta__hours">営業時間　8:00-17:00</p>
        </div>
      </div>
    </div>
  </section>

  <!-- よくある質問 -->
  <section class="p-faq">
    <div class="p-faq__inner">
      <h2 class="p-faq__title">よくある質問</h2>
      <div class="p-faq__list">
        <div class="p-faq__item">
          <div class="p-faq__question">
            <span class="p-faq__q-mark">Q</span>
            <p class="p-faq__q-text">アスベストの調査だけ頼めますか？</p>
          </div>
          <div class="p-faq__answer">
            <span class="p-faq__a-mark">A</span>
            <p class="p-faq__a-text">はい。調査から報告まで一貫して対応可能です。</p>
          </div>
        </div>
        <div class="p-faq__item">
          <div class="p-faq__question">
            <span class="p-faq__q-mark">Q</span>
            <p class="p-faq__q-text">見積もり後に断っても大丈夫？</p>
          </div>
          <div class="p-faq__answer">
            <span class="p-faq__a-mark">A</span>
            <p class="p-faq__a-text">もちろんです。強引な営業は一切いたしません。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- お問い合わせフォーム -->
  <section class="p-contact-form" id="contact">
    <div class="p-contact-form__inner">
      <h2 class="p-contact-form__title">お問い合わせフォーム</h2>
      <form class="p-contact-form__form" method="post" action="">
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">お名前 <span class="p-contact-form__required">*</span></label>
          <input type="text" name="name" class="p-contact-form__input" required>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">貴社名（法人の場合のみ必須）</label>
          <input type="text" name="company" class="p-contact-form__input">
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">ご相談内容をお選びください <span class="p-contact-form__required">*</span></label>
          <div class="p-contact-form__select-wrap">
            <select name="inquiry_type" class="p-contact-form__select" required>
              <option value="">ご相談内容を選択</option>
              <option value="subsidy">補助金について</option>
              <option value="asbestos">アスベスト調査</option>
              <option value="demolition">解体工事</option>
              <option value="other">その他</option>
            </select>
          </div>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">物件の構造 <span class="p-contact-form__required">*</span></label>
          <div class="p-contact-form__select-wrap">
            <select name="structure" class="p-contact-form__select" required>
              <option value="">物件の構造を選択</option>
              <option value="wood">木造</option>
              <option value="steel">鉄骨造</option>
              <option value="rc">ＲＣ造</option>
            </select>
          </div>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">解体予定時期 <span class="p-contact-form__required">*</span></label>
          <div class="p-contact-form__select-wrap">
            <select name="schedule" class="p-contact-form__select" required>
              <option value="">解体予定時期を選択</option>
              <option value="asap">できるだけ早く</option>
              <option value="3months">3ヶ月以内</option>
              <option value="6months">6ヶ月以内</option>
              <option value="1year">1年以内</option>
              <option value="undecided">未定</option>
            </select>
          </div>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">他社見積もりの有無 <span class="p-contact-form__required">*</span></label>
          <div class="p-contact-form__radio-group">
            <label class="p-contact-form__radio-label">
              <input type="radio" name="other_estimate" value="yes" class="p-contact-form__radio">あり
            </label>
            <label class="p-contact-form__radio-label">
              <input type="radio" name="other_estimate" value="no" class="p-contact-form__radio">なし
            </label>
          </div>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">※「あり」の場合、実行予算の範囲内で施工可能か確認を希望しますか？</label>
          <div class="p-contact-form__radio-group">
            <label class="p-contact-form__radio-label">
              <input type="radio" name="budget_check" value="yes" class="p-contact-form__radio">はい
            </label>
            <label class="p-contact-form__radio-label">
              <input type="radio" name="budget_check" value="no" class="p-contact-form__radio">いいえ
            </label>
          </div>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">物件の所在地（市区町村までで可） <span class="p-contact-form__required">*</span></label>
          <input type="text" name="location" class="p-contact-form__input" required>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">ご相談内容 <span class="p-contact-form__required">*</span></label>
          <textarea name="inquiry" class="p-contact-form__textarea" placeholder="「補助金診断を希望」「アスベスト調査の相談」「狭小地のため現地を見てほしい」など。" required></textarea>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">事前のご要望</label>
          <textarea name="request" class="p-contact-form__textarea" placeholder="ご希望の時間帯や、オンライン面談ツール等ございましたらご自由にご記入ください。"></textarea>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">ご希望の連絡方法</label>
          <div class="p-contact-form__radio-group">
            <label class="p-contact-form__radio-label">
              <input type="radio" name="contact_method" value="tel" class="p-contact-form__radio">電話
            </label>
            <label class="p-contact-form__radio-label">
              <input type="radio" name="contact_method" value="email" class="p-contact-form__radio">メール
            </label>
            <label class="p-contact-form__radio-label">
              <input type="radio" name="contact_method" value="online" class="p-contact-form__radio">オンライン面談
            </label>
          </div>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">お電話番号 <span class="p-contact-form__required">*</span></label>
          <input type="tel" name="tel" class="p-contact-form__input" required>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">メールアドレス <span class="p-contact-form__required">*</span></label>
          <input type="email" name="email" class="p-contact-form__input" required>
        </div>
        <div class="p-contact-form__field">
          <label class="p-contact-form__label">プライバシーポリシーへの同意 <span class="p-contact-form__required">*</span></label>
          <label class="p-contact-form__check-label">
            <input type="checkbox" name="privacy" class="p-contact-form__checkbox" required>
            プライバシーポリシーに同意します。
          </label>
        </div>
        <div class="p-contact-form__submit">
          <button type="submit" class="p-contact-form__btn">送信する</button>
        </div>
      </form>
    </div>
  </section>
</main>

<?php get_footer(); ?>
