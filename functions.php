<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Theme Setup
|--------------------------------------------------------------------------
*/

function nova_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    add_theme_support('customizer-selective-refresh-widgets');

    register_nav_menus([
        'header_menu' => __('Header Menu', 'nova'),
        'footer_menu' => __('Footer Menu', 'nova'),
    ]);
}

add_action('after_setup_theme', 'nova_theme_setup');


/*
|--------------------------------------------------------------------------
| Register Widget Areas
|--------------------------------------------------------------------------
*/

function nova_widgets_init() {

    register_sidebar([
        'name'          => __('Sidebar', 'nova'),
        'id'            => 'sidebar-1',
        'description'   => __('Main Sidebar', 'nova'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget__title">',
        'after_title'   => '</h3>',
    ]);
}

add_action('widgets_init', 'nova_widgets_init');


/*
|--------------------------------------------------------------------------
| Allow SVG Upload
|--------------------------------------------------------------------------
*/

function nova_allow_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'nova_allow_svg');


/*
|--------------------------------------------------------------------------
| Clean Head
|--------------------------------------------------------------------------
*/

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');


/*
|--------------------------------------------------------------------------
| Theme Constants
|--------------------------------------------------------------------------
*/

define('NOVA_THEME_DIR', get_template_directory());

define('NOVA_THEME_URI', get_template_directory_uri());