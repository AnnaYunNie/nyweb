<?php
/**
 * Function describe for Static Mag 
 * 
 * @package static-mag
 */

include_once( trailingslashit( get_stylesheet_directory() ) . 'lib/custom-config.php' );

add_action( 'wp_enqueue_scripts', 'static_mag_enqueue_styles', 999 );
function static_mag_enqueue_styles() {
  $parent_style = 'static-mag-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'static-mag-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

}

function static_mag_theme_setup() {
    
    load_child_theme_textdomain( 'static-mag', get_stylesheet_directory() . '/languages' );
    
}
add_action( 'after_setup_theme', 'static_mag_theme_setup' );

function static_mag_custom_remove( $wp_customize ) {
    
    $wp_customize->remove_control( 'featured-categories' );
    $wp_customize->remove_control( 'get-featured' );
    
}

add_action( 'customize_register', 'static_mag_custom_remove', 100);
