<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
    register_nav_menus(
        array (
                'primary-menu' => _('Primary Menu')
            )
        );
}

add_action ('init', 'register_theme_menus');

function wpt_theme_styles() {
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Lato:400,900|Libre+Baskerville:400,400i');
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function tasha_dibiagio_theme_js() {
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/tasha-site.js', array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'tasha_dibiagio_theme_js' );

?>