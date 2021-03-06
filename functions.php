<?php 
/**
 * Functions for Termowizja theme
 */

/**
 * Include styles and scripts fot them
 */
function load_styles_and_scripts() {
    $styleVersion = filemtime( get_template_directory() . '/assets/css/main.css' );
    $scriptVersion = filemtime( get_template_directory() . '/assets/js/app.js' );

    wp_enqueue_script( 'fa', 'https://use.fontawesome.com/b1f95d1c43.js', array(), false );
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.1', true);
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('jQuery'), $scriptVersion, true );

    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Lato:100,200,300,400|Raleway&amp;subset=latin-ext', array(), null );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $styleVersion, 'all');
}
add_action( 'wp_enqueue_scripts', 'load_styles_and_scripts' );

/**
 * Register Nav Menu
 */
function myCustomMenu() {

    register_nav_menu( 'header_menu', 'Menu główne' );
}
add_action( 'init', 'myCustomMenu' );

/**
 * Post thumbnails
 */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}
