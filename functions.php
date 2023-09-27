<?php

function enqueue_scripts()
{
    // css
    wp_enqueue_style("style", get_stylesheet_uri());
    // js
    wp_enqueue_script("script", get_stylesheet_directory_uri().'/js/common.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

?>