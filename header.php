<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- ページタイトル -->
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>

  <!-- 画像最適化 -->
  <style>
    img:is([sizes="auto" i], [sizes^="auto," i]) {
      contain-intrinsic-size: 3000px 1500px
    }
  </style>

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="//kit.fontawesome.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
  <link rel="dns-prefetch" href="//www.googletagmanager.com">

  <!-- RSS Feed -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> » フィード" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> » コメントフィード" href="<?php bloginfo('comments_rss2_url'); ?>">

  <!-- SEO SIMPLE PACK -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="WordPress, ポートフォリオ, Web制作">
  <link rel="canonical" href="<?php echo home_url(); ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/og-image.jpg">
  <meta property="og:title" content="<?php wp_title('|', true, 'right');
                                      bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php echo home_url(); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:card" content="summary">

  <!-- Google Analytics (gtag.js) — TODO: G-XXXXXXXXXX を実際のIDに差し替え -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script>
  -->

  <!-- 外部ライブラリ -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css?ver=1.11.3" type="text/css" media="all">
  <script type="text/javascript" src="//kit.fontawesome.com/e6a238fcba.js" id="fontawesome-kit-js"></script>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

  <!-- WordPress REST API -->
  <link rel="https://api.w.org/" href="<?php echo home_url(); ?>/wp-json/">
  <link rel="alternate" type="application/json" href="<?php echo home_url(); ?>/wp-json/wp/v2/pages/<?php echo get_the_ID(); ?>">
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo home_url(); ?>/xmlrpc.php?rsd">
  <meta name="generator" content="WordPress <?php echo get_bloginfo('version'); ?>">
  <link rel="shortlink" href="<?php echo home_url(); ?>">
  <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="<?php echo home_url(); ?>/wp-json/oembed/1.0/embed?url=<?php echo urlencode(home_url()); ?>">
  <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="<?php echo home_url(); ?>/wp-json/oembed/1.0/embed?url=<?php echo urlencode(home_url()); ?>&format=xml">

  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-192x192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-180x180.png">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-270x270.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="l-site">
    <header class="header js-header" id="header">
      <div class="header__inner">
        <div class="header__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/logo.png')); ?>" class="header__logo-img" alt="株式会社N-tech">
          </a>
        </div>
        <div class="header__body">
        <nav class="header__nav md-none">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <a href="#price">坪単価</a>
            </li>
            <li class="header__nav-item">
              <a href="#voice">お客様の声</a>
            </li>
            <li class="header__nav-item">
              <a href="#worries">よくある悩み</a>
            </li>
          </ul>
        </nav>
        <div class="header__contact">
          <div class="header__tel-block">
            <div class="header__tel-row">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/header-icon-tel.png')); ?>" class="header__tel-icon" alt="">
              <a href="tel:03-6679-4489" class="header__tel-number">03-6679-4489</a>
            </div>
            <span class="header__tel-hours">［営業時間］10:00-17:00</span>
          </div>
          <div class="header__cta-block">
            <a href="#simulation" class="header__btn header__btn--simulation">
              <span class="header__btn-text">料金シミュレーション</span>
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/header-icon-simulation.png')); ?>" class="header__btn-icon" alt="外部リンク">
            </a>
            <a href="#contact" class="header__btn header__btn--contact">
              <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/header-icon-mail.png')); ?>" class="header__btn-icon" alt="">
              <span class="header__btn-text">お問い合わせ</span>
            </a>
          </div>
        </div>
        </div>
        <button type="button" class="header__hamburger js-hamburger md-flex" aria-label="メニューを開く" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <nav class="header__drawer js-drawer drawer-menu">
        <div class="drawer-menu__inner">
          <ul class="drawer-menu__list">
            <li class="drawer-menu__item drawer__nav-item">
              <a href="#price">坪単価</a>
            </li>
            <li class="drawer-menu__item drawer__nav-item">
              <a href="#voice">お客様の声</a>
            </li>
            <li class="drawer-menu__item drawer__nav-item">
              <a href="#worries">よくある悩み</a>
            </li>
          </ul>
          <a href="tel:03-6679-4489" class="drawer-menu__tel">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/header-icon-tel.png')); ?>" alt="">
            03-6679-4489
          </a>
          <a href="#simulation" class="drawer-menu__btn drawer-menu__btn--simulation">料金シミュレーション</a>
          <a href="#contact" class="drawer-menu__btn drawer-menu__btn--contact">お問い合わせ</a>
        </div>
      </nav>
      <div class="overlay js-overlay" id="js-overlay"></div>
    </header>
