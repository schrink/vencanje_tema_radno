<?php
/**
 * vencanje functions and definitions
 *
 * @package vencanje
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'vencanje_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vencanje_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vencanje, use a find and replace
	 * to change 'vencanje' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'vencanje', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus( array(
	// 	'primary' => __( 'Primary Menu', 'vencanje' ),
	// ) );
	register_nav_menu( "top", "Gornji glavni meni" );
	register_nav_menu( "footer", "Meni u footeru" );
	



	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vencanje_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // vencanje_setup
add_action( 'after_setup_theme', 'vencanje_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function vencanje_widgets_init() {
	// register_sidebar( array(
	// 	'name'          => __( 'Sidebar', 'vencanje' ),
	// 	'id'            => 'sidebar-1',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</aside>',
	// 	'before_title'  => '<h1 class="widget-title">',
	// 	'after_title'   => '</h1>',
	// ) );


	register_sidebar( array(
		'name'          => __( 'Home page', 'home' ),
		'id'            => 'home-1',
		'before_widget' => '<div class="one_third columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


}
add_action( 'widgets_init', 'vencanje_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vencanje_scripts() {
	wp_enqueue_style( 'vencanje-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vencanje-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'vencanje-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_enqueue_style( 'droid-sans',  'http://fonts.googleapis.com/css?family=Droid+Sans:400,700');
	wp_enqueue_style( 'droid-serif',  'http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700');

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/styles/style.css');
	wp_enqueue_style( 'inner', get_template_directory_uri() . '/styles/inner.css');
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/styles/layout.css');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/styles/flexslider.css');
	wp_enqueue_style( 'color', get_template_directory_uri() . '/styles/color.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/styles/prettyPhoto.css');


}
add_action( 'wp_enqueue_scripts', 'vencanje_scripts' );

function vencanje_admin(){
	wp_enqueue_scripts('custom-scripts', get_template_directory() . '/js/custom_admin.js');
}

//add_action( 'admin_enqueue_scripts', 'vencanje_admin' );
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/VENCANJE_WIDGET.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';









function wp_gear_manager_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_enqueue_script('jquery');
}

function wp_gear_manager_admin_styles() {
wp_enqueue_style('thickbox');
}

add_action('admin_print_scripts', 'wp_gear_manager_admin_scripts');
add_action('admin_print_styles', 'wp_gear_manager_admin_styles');