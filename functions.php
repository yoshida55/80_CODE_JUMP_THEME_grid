<?php
function fd_script()
{
    // reset.cssを読み込む
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/css/reset.css');
    // style.cssを読み込む
    wp_enqueue_style('fd-style', get_template_directory_uri() . '/css/style.css');
    // work.cssを読み込む
    wp_enqueue_style('work-css', get_template_directory_uri() . '/css/work.css');


    // work.jsを読み込む
    wp_enqueue_script('work-js', get_template_directory_uri() . '/js/work.js', array(), filemtime(get_template_directory() . '/js/work.js'), true);

    // jQueryを読み込む
    wp_enqueue_script('jquery');

    };
add_action('wp_enqueue_scripts', 'fd_script');

add_theme_support( 'post-thumbnails' );


// ページネーション
function pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if(empty($paged)) { $paged = 1; }
    if($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages) { $pages = 1; }
    }
    if(1 != $pages) {
        echo '<ul class="pagination">';
        if($paged > 1) {
            echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">PREV</a></li>';
        }
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                if ($paged == $i) {
                    echo '<li class="active">' . $i . '</li>';
                } else {
                    echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
                }
            }
        }
        if ($paged < $pages) {
            echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">NEXT</a></li>';
        }
        echo '</ul>';
    }
}
