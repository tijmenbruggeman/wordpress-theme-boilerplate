<?php
if ( ! function_exists( 'yourtheme_setup' ) ) :

	function yourtheme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yourtheme' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'yourtheme_setup' );

/**
 * Enqueue scripts and styles.
 */
function yourtheme_scripts() {
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.min.css' );

	wp_register_script( 'slick', get_template_directory_uri() . '/js/src/slick.js', [ 'jquery' ], '1.0.0', true );
	wp_register_script( 'scripts', get_template_directory_uri() . '/js/src/scripts.js', [ 'jquery', 'slick' ], '1.0.0', true );
	wp_register_script( 'bundle', get_template_directory_uri() . '/js/bundle.min.js', [ 'jquery' ], '1.0.0', true  );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick' );
	wp_enqueue_script( 'scripts' );
	//wp_enqueue_script( 'bundle' ); // Uncomment in production
	wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'yourtheme_scripts' );

require 'inc/settings.php';
require 'inc/widgets.php';
require 'inc/custom-post-types.php';