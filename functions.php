<?php


 if(!defined('ABSPATH')) exit;

 if ( ! function_exists( 'wx__setup' ) ) :

	function ici__setup() {

		/**
		 * Show or Hide Admin top bar
		 *
		 * @param true/false
		 */

		//show_admin_bar(true);

		load_theme_textdomain( 'buenoste' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-background' );


		// Custom Crop Sizes
		add_image_size( 'wx_small', 190,220, 1 );
		add_image_size( 'wx_medium', 424,540, 1 );
		add_image_size( 'wx_big', 1260 );

		// This theme uses wp_nav_menu() in one locations.
		register_nav_menus( array(
			'top'    => __( 'Top Menu', 'buenoste' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'video',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		if ( ! isset( $content_width ) ) {
			$content_width = 1500;
		}

		add_editor_style();

	}

	add_action( 'after_setup_theme', 'ici__setup' );

 endif;

 /**
  * Enqueue scripts and styles.
  *
  * @since 1.0
  */

 function ici__enqueue_scripts() {

	// CSS
	wp_enqueue_style( 'gfont-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,500,600italic,700italic,800italic,400,300,600,700,800|&subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese' );
	wp_enqueue_style( 'gfont-Oswald', 'http://fonts.googleapis.com/css?family=Oswald:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|&subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese' );
	wp_enqueue_style( 'gfont-Caveat', 'https://fonts.googleapis.com/css?family=Caveat' );

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'main-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style( 'ici-style', get_stylesheet_uri() );

	// JS
	wp_enqueue_script( 'waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'',true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),'',true);
 }

 add_action( 'wp_enqueue_scripts', 'ici__enqueue_scripts' );


  // Loading WP Ajax
 function ici__custom_js() {
	echo '<script type="text/javascript">
			var ajaxurl = "' . admin_url('admin-ajax.php') . '";
		</script>';
 }
 add_action('wp_head', 'ici__custom_js');

 /**
  *
  * Head Title us wp_title()
  *
  * @since Wexzy Start 1.0
  */

 function ici_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'buenoste' ), max( $paged, $page ) );
	}

	return $title;
 }
 add_filter( 'wp_title', 'ici_wp_title', 10, 2 );


  /**
  *
  * Get url of post thumbnail
  *
  * @param number $post_id		ID of post
  * @param string $thumbnail	Image size
  */

 function ici__featured_image($post_id,$thumbnail="thumbnail") {
 	$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id), $thumbnail );

	if($post_image) {
		return esc_url($post_image[0]);
	}

	return false;
 }


 function ici__register_sidebar() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'buenoste' ),
        'id' => 'main_sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'buenoste' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );

 }

 add_action( 'widgets_init', 'ici__register_sidebar' );

 // col grid
 function ici__colgrid() {
 	$col_md = 8;
 	if (!is_active_sidebar( 'main_sidebar' ) ) {
 		$col_md = 12;
	}

	return $col_md;
 }
 
 function ici__excerpt_more( $more ) {
 	return '...';
 }
 
 add_filter( 'excerpt_more', 'ici__excerpt_more' );


  // Trace Debug
 function trace($data) {
 	echo "<pre>";
	print_r($data);
	echo "</pre>";
 }
 
 add_filter( 'genesis_author_box_gravatar_size', 'crunchify_author_box_gravatar_size' );
 function crunchify_author_box_gravatar_size( $size ) {
    return 90;
 }
 
 /*
  * =================== Include Files
  */

  // Nav Walker
  include "inc/nav_walker.php";

  // Post Class Content and etc..
  include "inc/post.class.php";

  include 'inc/app.class.php';

	// TGM Activation Plugins
	require_once('inc/tgm-activation.php');

	// MetaBox io Settings
	require_once('inc/metaboxio.php');

	// Active Redux Framework
	if( class_exists('ReduxFramework')) {
		require_once('inc/reduxf.php');
	}
