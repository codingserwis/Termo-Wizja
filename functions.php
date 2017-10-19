<?php 
/**
 * Functions for Termowizja theme
 */

/**
 * Include styles and scripts fot them
 */
function load_styles_and_scripts() {
    $styleVersion = filemtime( get_template_directory() . '/assets/css/main.css' );
    
    wp_enqueue_style( 'lato_font', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin-ext', array(), null );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), $styleVersion, 'all');
}
add_action( 'wp_enqueue_scripts', 'load_styles_and_scripts' );