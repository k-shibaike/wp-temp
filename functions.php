<?php

// css, ls読み込み
function enqueue_scripts()
{
    // css
    wp_enqueue_style("style", get_stylesheet_uri());
    // js
    wp_enqueue_script("script", get_stylesheet_directory_uri().'/js/common.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// グローバルメニュー
add_theme_support('menus');

// 記事のpタグを出力しない
remove_filter('the_content', 'wpautop');
// 抜粋のpタグを出力しない
remove_filter('the_excerpt', 'wpautop');

?>