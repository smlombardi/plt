<?php

/**
* Eventica Child Theme functions and definitions.
 */

if ( ! defined( 'ABSPATH' ) ) exit;
// Exit if accessed directly

add_action( 'after_setup_theme', 'tokopress_load_childtheme_languages', 5 );
function tokopress_load_childtheme_languages() {
	
	/* this theme supports localization */
	load_child_theme_textdomain( 'tokopress', get_stylesheet_directory() . '/languages' );
	
}


/* Please add your custom functions code below this line. */

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Header Sidebar', 'theme-slug' ),
		'id' => 'sidebar-1',
		'description' => __( 'Above the Header', 'theme-slug' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	    ) );
}
