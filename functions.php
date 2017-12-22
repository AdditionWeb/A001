<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'ample-bxslider','ample-fontawesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// Remove some sidebars from parent theme

function a001_remove_sidebar(){

	unregister_sidebar( 'ample_business_sidebar' );
  unregister_sidebar( 'ample_footer_sidebar1' );
  unregister_sidebar( 'ample_footer_sidebar2' );
  unregister_sidebar( 'ample_footer_sidebar3' );
  unregister_sidebar( 'ample_footer_sidebar4' );

}
add_action( 'widgets_init', 'a001_remove_sidebar', 11 );

// Include new widget areas
require_once( get_stylesheet_directory() . '/inc/widget/widgets.php' );

// Include Modified Customizer Options
require_once( get_stylesheet_directory() . '/inc/customize/customizer.php' );