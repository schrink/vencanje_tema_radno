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


	$labels = array(
		'name'                => _x( 'Guestbook', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Guestbook', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Guestbook', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Guestbook:', 'text_domain' ),
		'all_items'           => __( 'Svi Guestbook', 'text_domain' ),
		'view_item'           => __( 'Pogledaj Guestbook', 'text_domain' ),
		'add_new_item'        => __( 'Dodaj Guestbook', 'text_domain' ),
		'add_new'             => __( 'Novi unos', 'text_domain' ),
		'edit_item'           => __( 'Edituj Guestbook', 'text_domain' ),
		'update_item'         => __( 'Izmeni Guestbook', 'text_domain' ),
		'search_items'        => __( 'Pretraga Guestbook', 'text_domain' ),
		'not_found'           => __( 'Nema Guestbook', 'text_domain' ),
		'not_found_in_trash'  => __( 'Nema Guestbook u djubretu', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'getbook', 'text_domain' ),
		'description'         => __( 'Unos guestbook', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 15,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'guestbook', $args );

}

// Hook into the 'init' action
add_action( 'init', 'nas_post_type', 0 );



function izbaci_tekst_posle_more($tekst) {

 $pozicija_more = strpos($tekst, '<span id="more');
 $uvodni_deo = substr($tekst, 0, $pozicija_more);


	return $uvodni_deo;
}


function moj_shortcode($atts , $content = null ) {
	$border = $atts['border'];
	$out = "<table style='border:".$border."px solid red'>";
	$out .= "<tr>";
	$out .="<td>". $content ."</td>";
	$out .="</tr></table>";
	return $out;
}
add_shortcode( 'tabela', 'moj_shortcode' );


function moj_shortcode2() {
	$out = "<div class='separator'></div>";
	return $out;
}
add_shortcode( 'separator', 'moj_shortcode2' );

// Add Quicktags
function custom_quicktags() {

	if ( wp_script_is( 'quicktags' ) ) {
	?>
	<script type="text/javascript">
	QTags.addButton( 'tab1', 'tabela', '[tabela]', '[/tabela]', 'T', 'Tabela',  300);
	</script>
	<?php
	}

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'custom_quicktags' );





