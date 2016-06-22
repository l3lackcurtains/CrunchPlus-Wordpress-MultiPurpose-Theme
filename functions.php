<?php
/**
 * crunchplus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package crunchplus
 */
define("CPLUS_VERSION", "1.0");
define("CPLUS_DIR", get_template_directory() );
define("CPLUS_URI", get_template_directory_uri() );
define("IMG_URI", get_template_directory_uri()."/images");
define("LIB_DIR", get_template_directory()."/includes/lib" );
define("PLUGIN_DIR", get_template_directory()."/includes/plugins" );

if ( ! function_exists( 'crunchplus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function crunchplus_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on crunchplus, use a find and replace
	 * to change 'crunchplus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'crunchplus', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'crunchplus' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'crunchplus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'crunchplus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crunchplus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crunchplus_content_width', 640 );
}
add_action( 'after_setup_theme', 'crunchplus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
class crunchplus_widgets_init{
	public function crunchplus_sidebar_widgets() {
		register_sidebar( array(
			'name'          => esc_html__( 'Main Sidebar', 'crunchplus' ),
			'id'            => 'main-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'crunchplus' ),
			'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	public function crunchplus_footer1_widgets() {
		register_sidebar( array(
			'name'          => esc_html__( 'First Sidebar', 'crunchplus' ),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'crunchplus' ),
			'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	public function crunchplus_footer2_widgets() {
		register_sidebar( array(
			'name'          => esc_html__( 'Second Footer Sidebar', 'crunchplus' ),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'crunchplus' ),
			'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	public function crunchplus_footer3_widgets() {
		register_sidebar( array(
			'name'          => esc_html__( 'Third Footer Sidebar', 'crunchplus' ),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'crunchplus' ),
			'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	public function crunchplus_footer4_widgets() {
		register_sidebar( array(
			'name'          => esc_html__( 'Fourth Footer Sidebar', 'crunchplus' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'crunchplus' ),
			'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', array('crunchplus_widgets_init', 'crunchplus_sidebar_widgets' ) );
add_action( 'widgets_init', array('crunchplus_widgets_init', 'crunchplus_footer1_widgets' ) );
add_action( 'widgets_init', array('crunchplus_widgets_init', 'crunchplus_footer2_widgets' ) );
add_action( 'widgets_init', array('crunchplus_widgets_init', 'crunchplus_footer3_widgets' ) );
add_action( 'widgets_init', array('crunchplus_widgets_init', 'crunchplus_footer4_widgets' ) );


/**
 * Enqueue scripts and styles.
 */
class cplus_scripts{
	// Adding Javascripts into theme
	public function CPLUS_js(){
		wp_enqueue_script( 'jquery_min_js',	CPLUS_URI. '/assets/js/jquery.min.js', false, CPLUS_VERSION, true );
		wp_enqueue_script( 'bootstrap_js', CPLUS_URI. '/assets/js/bootstrap.min.js', false, CPLUS_VERSION, true );
		wp_enqueue_script( 'modernizr', CPLUS_URI. '/assets/js/modernizr.js', false, CPLUS_VERSION, true );
		wp_enqueue_script( 'nicescroll_min_js', CPLUS_URI. '/assets/js/jquery.nicescroll.min.js', false, CPLUS_VERSION, true );
		wp_enqueue_script( 'image_loaded', CPLUS_URI. '/assets/js/imagesloaded.pkgd.min.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'isotope', CPLUS_URI. '/assets/js/isotope.min.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'count_to', CPLUS_URI. '/assets/js/jquery.countTo.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'morphtext', CPLUS_URI. '/assets/js/morphext.min.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'magnific_popup', CPLUS_URI. '/assets/js/jquery.magnific-popup.min.js', false, CPLUS_VERSION, true );		
		// wp_enqueue_script( 'g_map', 'http://maps.google.com/maps/api/js?sensor=true', false, CPLUS_VERSION, true );
		// wp_enqueue_script( 'gmap', CPLUS_URI. '/assets/js/gmaps.min.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'wow', CPLUS_URI. '/assets/js/wow.min.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'smooth_scroll', CPLUS_URI. '/assets/js/smooth-scroll.min.js', false, CPLUS_VERSION, true );	
		wp_enqueue_script( 'owl_carousel', CPLUS_URI. '/assets/js/owl.carousel.min.js', false, CPLUS_VERSION, true );		
		wp_enqueue_script( 'way_points', CPLUS_URI. '/assets/js/waypoints.min.js', false, CPLUS_VERSION, true );	
		wp_enqueue_script( 'new-theme-navigation', CPLUS_URI . '/js/navigation.js', array(), '20120206', true );
		wp_enqueue_script( 'new-theme-skip-link-focus-fix', CPLUS_URI . '/js/skip-link-focus-fix.js', array(), '20130115', true );
		wp_enqueue_script( 'scripts_js', CPLUS_URI. '/assets/js/scripts.js', false, CPLUS_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
// Adding stylesheets into theme
	public function cplus_css(){
		wp_enqueue_style('bootstrap_css', CPLUS_URI.'/assets/css/bootstrap.min.css' );
		wp_enqueue_style('fa_icons_css', CPLUS_URI.'/assets/fa/css/font-awesome.min.css' );
		wp_enqueue_style('animate_css', CPLUS_URI.'/assets/css/animate.min.css');
		wp_enqueue_style('magnific_popup', CPLUS_URI.'/assets/css/magnific-popup.css');
		wp_enqueue_style('style_css', CPLUS_URI.'/style.css' );

	}
}
add_action('wp_enqueue_scripts', array('cplus_scripts','cplus_js') );
add_action('wp_enqueue_scripts', array('cplus_scripts','cplus_css') );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load Main functions file.
 */
require get_template_directory() . '/includes/theme-functions.php';
/**
 * Load custom navwalker.
 */
require get_template_directory() . '/includes/custom-navwalker.php';

/**
 * Load Theme frameworks.
 */
require_once get_template_directory() .'/includes/theme-framework/cs-framework.php';
/**
 * Load Shortcodes.
 */
require_once get_template_directory() .'/includes/shortcodes.php';
/**
 * Visual composer custom.
 */
require_once get_template_directory() .'/includes/vc_custom.php';
/**
 * TGM Plugin Activation.
 */
require_once(LIB_DIR."/class-tgm-plugin-activation.php");
// helper
require_once(LIB_DIR."/cplus-plugins.php");

