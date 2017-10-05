<?php
/*--------------------------*/
// Cases
/*--------------------------*/
function projecten_posttype() {
	$labels = array(
		'name'               => 'Projecten',
		'singular_name'      => 'Project',
		'menu_name'          => 'Projecten',
		'name_admin_bar'     => 'Projecten',
		'add_new'            => 'Nieuw Project',
		'add_new_item'       => 'Nieuw Project',
		'new_item'           => 'Nieuw Project',
		'edit_item'          => 'Bewerk Project',
		'view_item'          => 'Bekijk Project',
		'all_items'          => 'Alle Projecten',
		'search_items'       => 'Zoek Projecten',
		'parent_item_colon'  => 'Bovenliggende Projecten:',
		'not_found'          => 'Geen Projecten gevonden.',
		'not_found_in_trash' => 'Geen Project gevonden in de prullenbak.',
	);

	$args = array(
		'labels'             => $labels,
		'taxonomies'         => array(),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-clipboard',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type('Projecten', $args);
}
add_action('init', 'projecten_posttype');