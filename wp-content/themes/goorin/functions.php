<?php
/**
 * goorin functions and definitions
 *
 * @package goorin
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'goorin_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function goorin_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on goorin, use a find and replace
	 * to change 'goorin' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'goorin', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'post_custom_size', 296, 212, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'goorin' ),
		'footer' => __( 'Footer Menu', 'goorin' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'goorin_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // goorin_setup
add_action( 'after_setup_theme', 'goorin_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function goorin_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'goorin' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'goorin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function goorin_scripts() {
	wp_enqueue_style( 'goorin-style', get_stylesheet_uri() );

	wp_enqueue_script( 'goorin-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'goorin-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * Shop page script
	 */
	if( is_singular('shops') ){
		wp_enqueue_script( 'goorin-shop-page-map', get_template_directory_uri().'/js/shop_page_map.js', array('jquery'), '20150704', true );
		wp_enqueue_script( 'google-map', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false' );
	}
}
add_action( 'wp_enqueue_scripts', 'goorin_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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


/**
 * Shop
 */
$args = array(
    'label'              => __( 'Shops' ),
    'singular_label'     => __( 'Shops' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array(
        'slug'       => 'shops',
        'with_front' => true
    ),
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array(
        'title',
        'editor',
        'thumbnail',
        'comments'
    ),
    'has_archive'        => 'shops'
);

register_post_type( 'shops', $args );


/**
 * Store
 */
$args = array(
	'label'              => __( 'Stores' ),
	'singular_label'     => __( 'Store' ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'query_var'          => true,
	'rewrite'            => array(
		'slug'       => 'store',
		'with_front' => true
	),
	'capability_type'    => 'post',
	'hierarchical'       => false,
	'menu_position'      => 5,
	'supports'           => array(
		'title',
		'editor',
		'thumbnail',
		'comments'
	),
	'has_archive'        => 'stores'
);

register_post_type( 'store', $args );

$args = array(
    'label'              => __( 'Nav Menu Images' ),
    'singular_label'     => __( 'Nav Menu Image' ),
    'public'             => false,
    'show_ui'            => true,
    'show_in_nav_menus'  => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 25,
    'supports'           => array(
        'title',
        'thumbnail',
        'custom-fields'
    ),
);

register_post_type( 'nav_menu_image', $args );

function goorin_api_rewrite_tag() {
	add_rewrite_tag( '%api%', '([^&]+)' );
}

add_action( 'init', 'goorin_api_rewrite_tag' );

function goorin_api_rewrite_rule() {
	add_rewrite_rule( 'api/([^/]+)/key/57d2c3f1c88f78d043ff3c82fbcd2d77', 'index.php?api=$matches[1]', 'top' );
}

add_action( 'init', 'goorin_api_rewrite_rule' );

if( !get_option( 'goorin_api_installed' ) ) {
	function goorin_api_flush_rules() {
		flush_rewrite_rules( false );
		add_option( 'goorin_api_installed', '1' );
	}

	add_action( 'init', 'goorin_api_flush_rules', PHP_INT_MAX );
}

function goorin_api_handler() {
	global $wp_query;
	if( isset( $wp_query->query_vars['api'] ) && $wp_query->query_vars['api'] ) {
		switch( $wp_query->query_vars['api'] ) {
			case 'header':
				goorin_header();
				die();
			case 'footer':
				goorin_footer();
				die();
		}
	}
}

add_action( 'template_redirect', 'goorin_api_handler' );


/**
 * print formatted shop address
 */
function goorin_formatted_shop_address(){
	global $post;

	$address = '';

	if( $street1 = get_field('street_line_1', $post->ID ) ){
		$address =  $street1;

	}

	if( $street2 = get_field('street_line_2', $post->ID ) ){
		$address .=  '<br/>'.$street2;

	}

	if( $city = get_field('city', $post->ID ) ){
		$address .=  '<br/>'.$city;

	}

	if( $state = get_field('state', $post->ID ) ){
		$address .=  ', '.$state;

	}

	if( $country = get_field('country', $post->ID ) ){
		$address .=  ', '.$country;

	}

	if( $zip = get_field('zip', $post->ID ) ){
		$address .=  ' '.$zip;

	}

	echo $address;
}


/**
 * Shop listing
 */
function goorin_shop_listing(){
	global $wpdb;

	$sql = 'SELECT sl_store, sl_linked_postid, sl_city, sl_url FROM '.$wpdb->prefix.'store_locator';

	$results = $wpdb->get_results( $sql, ARRAY_A );

	if( $results ){
		$shops = array();
		foreach( $results as $shop ){
			$shop_names[ sanitize_title( $shop['sl_city'] ) ] = $shop['sl_city'];
			$shops[ sanitize_title( $shop['sl_city'] ) ][]= array(
				'shop_id'   => $shop['sl_linked_postid'],
				'shop_link' => $shop['sl_url'],
				'shop_name' => $shop['sl_store']
			);
		}
	}

	//sort shop names
	ksort($shop_names);

	//render html
	foreach( $shop_names as $shop_key => $shop_name ){
		echo '<h6>'.$shop_name.'</h6>';

		echo '<ul>';
		foreach( $shops[$shop_key] as $shop ){
			echo '<li><a href="'.$shop['shop_link'].'">'.$shop['shop_name'].'</a></li>';
		}
		echo '</ul>';

	}

	$gooring_shop_listing = array(
		'name' => $shop_name,
		'shops'=> $shops
	);

	//store shops and shop name in cache and update them when any shop post type post delete or updated
//	set_transient( 'goorin_shop_listing', $gooring_shop_listing, 365 * 24 * HOUR_IN_SECONDS );

}

