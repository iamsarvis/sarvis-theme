<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', 'sarvis_theme_assets' );
function sarvis_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.5.3');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false,'3.5.1');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false,'4.5.3');
}

add_action( 'init', 'sarvis_register_menus' );
function sarvis_register_menus() {
    register_nav_menus( array(
        'topbar' => __( 'topbar Menu', 'sarvis' )
    ));
}

function sarvis_atg_menu_classes( $classes, $item, $args ) {
    if($args->theme_location == 'topbar') {
        $classes[] = 'nav-items';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'sarvis_atg_menu_classes', 1, 3);

function sarvis_add_menuclass( $ulclass ) {
    return preg_replace('/<a /', '<a class="nav-link" ', $ulclass);
}
add_filter('wp_nav_menu','sarvis_add_menuclass');