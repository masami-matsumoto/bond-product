<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<title><?php bloginfo('name'); ?></title>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" sizes="32x32"><!-- 32×32 -->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- 180×180 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/confirmation.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" defer></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3TL6EZQ6Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z3TL6EZQ6Z');
</script>

</head>

<body>
<header class="header">
  <div class="header__inner">
    <h1 class="header__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="BOND"></a></h1>
    <button id="hamburger" class="hamburger" aria-label="メニューを開く" aria-controls="gnav" aria-expanded="false"> <span class="hamburger__line" aria-hidden="true"></span> </button>
    <nav id="gnav" class="gnav" aria-label="メインメニュー">
    <?php
wp_nav_menu(
    array(
        'theme_location' => 'place_global', // グローバルメニューを出力
        'container' => 'nav',
        // 'container_class' => 'gnav',
        'menu_class' => 'gnav__list',
        'fallback_cb' => false,
        'add_a_class' => 'gnav__link', // aタグにクラスを追加
    )
);
?>
      <!-- <ul class="gnav__list">
        <li class="gnav__item"><a href="about/index.html" class="gnav__link">ABOUT</a></li>
        <li class="gnav__item"><a href="service/index.html" class="gnav__link">SERVICE</a></li>
        <li class="gnav__item"><a href="contact/index.html" class="gnav__link">CONTACT</a></li>
      </ul> -->
      <ul class="spmenu__sns">
        <li><a href="https://www.facebook.com/fragrance.BOND" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="Facebook"/></a></li>
        <li><a href="https://www.instagram.com/fragrance.bond/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt="Instagram"/></a></li>
      </ul>
    </nav>
  </div>
</header>