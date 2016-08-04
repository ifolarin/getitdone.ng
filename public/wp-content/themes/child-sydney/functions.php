<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'sydney-bootstrap' ) );
        
    }
endif;

function load_cta_buttons_js(){
// 	wp_register_script('cta_buttons', trailingslashit(get_template_directory_uri()) . 'js/cta-buttons.js', array('jquery'), true );
// 	wp_enqueue_script('cta_buttons');
	wp_enqueue_script('cta_buttons', get_stylesheet_directory_uri(). '/js/cta-buttons.js', array('jquery'));
	wp_enqueue_style( 'chld_style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'sydney-bootstrap' ) );
}

add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
add_action( 'wp_enqueue_scripts', 'load_cta_buttons_js' );

// END ENQUEUE PARENT ACTION
