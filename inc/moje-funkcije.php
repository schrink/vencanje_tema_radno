<?php

add_theme_support("post-thumbnails");

// Register Custom Post Type
function nas_post_type() {

	$labels = array(
		'name'                => _x( 'Mladenci', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Mladenac', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Mladenci', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Product:', 'text_domain' ),
		'all_items'           => __( 'Svi mladenci', 'text_domain' ),
		'view_item'           => __( 'Pogledaj mladence', 'text_domain' ),
		'add_new_item'        => __( 'Dodaj mladence', 'text_domain' ),
		'add_new'             => __( 'Novi unos', 'text_domain' ),
		'edit_item'           => __( 'Edituj Mladence', 'text_domain' ),
		'update_item'         => __( 'Izmeni Mladence', 'text_domain' ),
		'search_items'        => __( 'Pretraga mladenaca', 'text_domain' ),
		'not_found'           => __( 'Nema mladenaca', 'text_domain' ),
		'not_found_in_trash'  => __( 'Nema mladenaca u djubretu', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'mladenci', 'text_domain' ),
		'description'         => __( 'Unos mladenaca', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'mladenci', $args );

}

// Hook into the 'init' action
add_action( 'init', 'nas_post_type', 0 );