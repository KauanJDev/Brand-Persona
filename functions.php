<?php


add_action('after_setup_theme', function () {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});

wp_enqueue_style( 
    'theme-slug-example',
    get_parent_theme_file_uri( 'style.css' ),
    array(),
    wp_get_theme()->get( 'Version' ),
    'all'
);


wp_enqueue_style('index',get_template_directory_uri(). '/assets/bootstrap/index.scss');
wp_enqueue_style('style',get_stylesheet_uri(  ), false , false);
wp_enqueue_script('index', get_template_directory_uri().'/assets/js/index.js', true, null);
