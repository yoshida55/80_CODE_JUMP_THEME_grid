<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="wrapper">
    <h1 class="site-title">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="Furniture Design">
      </a>
    </h1>

    <nav id="navi">
      <ul class="nav-menu">
        <li><a href="<?php echo esc_url(home_url('/category/products/')); ?>">PRODUCTS</a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
        <li><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
        <li><a href="mailto:xxxxx@xxx.xxx?subject=お問い合わせ">CONTACT</a></li>
      </ul>
    </nav>

    <div class="toggle_btn">
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
  </header>