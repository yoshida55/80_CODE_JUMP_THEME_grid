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
    wp_enqueue_script('work-js', get_template_directory_uri() . '/js/work.js', array(), null, true);
};
add_action('wp_enqueue_scripts', 'fd_script');
