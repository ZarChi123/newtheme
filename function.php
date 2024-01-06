<?php
// Enqueue styles
function university_opening_house_styles() {
    wp_enqueue_style('university-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'university_opening_house_styles');

// Register menus
function university_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'university-opening-house'),
    ));
}
add_action('init', 'university_register_menus');
