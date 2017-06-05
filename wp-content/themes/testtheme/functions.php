<?php 
add_theme_support( 'menus' );

add_action('after_setup_theme', 'register_custom_menus');

function register_custom_menus() {
    register_nav_menus( array(
        'primary_menu' => __('Header Menu'),
        '404_menu' => __('404 Menu') ) );
}

?>