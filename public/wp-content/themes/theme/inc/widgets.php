<?php
// Main widget
function main_init() {

	register_sidebar( array(
		'name'          => '',
		'id'            => 'main',
		'before_widget' => '',
		'after_widget'  => ''
	) );

}

add_action( 'widgets_init', 'main_init' );

// Contact Home widget
function contact_gegevens_init() {

	register_sidebar( array(
		'name'          => 'Contact Gegevens',
		'id'            => 'contact',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<strong>',
		'after_title'   => '</strong>'
	) );

}

add_action( 'widgets_init', 'contact_gegevens_init' );

// Meer weten widget
function meer_weten_init() {

	register_sidebar( array(
		'name'          => 'Meer weten?',
		'id'            => 'meerweten',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<strong>',
		'after_title'   => '</strong>'
	) );

}

add_action( 'widgets_init', 'meer_weten_init' );
?>