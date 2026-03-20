<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- ===============================================
      ヘッダーエリア
      =============================================== -->
    <header class="header_area">
        <!-- ハンバーガーメニューをヘッダーをflexboxで横並びにする -->
        <div class="header_content">
            <h1>
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img class="header_logo" src="<?php echo esc_url( get_theme_file_uri('img/logo.svg') ); ?>" alt="ロゴ" />
                </a>
            </h1>

            <!-- ハンバーガーメニュー  -->
            <button class="hamburger_menu">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>

        <!-- グローバルメニュー -->
        <nav class="global_menu">
            <a href="<?php echo esc_url( home_url() ); ?>" class="global_menu_link">トップ</a>
            <a href="<?php echo esc_url( home_url('/about') ); ?>" class="global_menu_link">会社概要</a>
            <a href="<?php echo esc_url( home_url('/careers') ); ?>" class="global_menu_link">採用情報</a>
            <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="global_menu_link">お問い合わせ</a>
        </nav>
    </header>