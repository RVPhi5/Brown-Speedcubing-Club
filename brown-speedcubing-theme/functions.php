<?php

// Set up theme basics
function brown_speedcubing_setup() {
    // Let WordPress handle the <title> tag
    add_theme_support('title-tag');

    // Featured images if you want them later
    add_theme_support('post-thumbnails');

    // Register a primary navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'brown-speedcubing'),
    ));
}
add_action('after_setup_theme', 'brown_speedcubing_setup');


// Enqueue styles
function brown_speedcubing_assets() {
    // Main theme stylesheet (style.css)
    wp_enqueue_style(
        'brown-speedcubing-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    // Extra CSS in assets/style.css, if it exists
    $custom_css = get_stylesheet_directory() . '/assets/style.css';
    if (file_exists($custom_css)) {
        wp_enqueue_style(
            'brown-speedcubing-custom',
            get_stylesheet_directory_uri() . '/assets/style.css',
            array('brown-speedcubing-style'),
            filemtime($custom_css)
        );
    }
}
add_action('wp_enqueue_scripts', 'brown_speedcubing_assets');
