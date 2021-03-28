<?php
/**
 * My Little Montessorian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Little_Montessorian
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'my_little_montessorian_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_little_montessorian_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on My Little Montessorian, use a find and replace
		 * to change 'my-little-montessorian' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'my-little-montessorian', get_template_directory() . '/languages' );

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

		/**
		 * Register custom nav menus for the website
		 */
		register_nav_menus(
			array(
				'header-top-navigation' => esc_html__( 'Header Top Navigation', 'my-little-montessorian' ),
				'header-navigation-left' => esc_html__( 'Primary Header Navigation', 'my-little-montessorian' ),
				'header-navigation-right' => esc_html__( 'Primary Header Navigation', 'my-little-montessorian' ),
				'primary-footer-navigation' => esc_html__( 'Primary Footer Navigation', 'my-little-montessorian' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'my_little_montessorian_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'my_little_montessorian_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_little_montessorian_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'my_little_montessorian_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_little_montessorian_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_little_montessorian_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'my-little-montessorian' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'my-little-montessorian' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_little_montessorian_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_little_montessorian_scripts() {
	wp_enqueue_style( 'default-styles', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'default-styles', 'rtl', 'replace' );

	wp_enqueue_script( 'my-little-montessorian-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * Include custom styles for the theme
	 */
	wp_enqueue_style( 'my-little-montessorian-styles', get_template_directory_uri() . '/my_little_montessorian.css', array(), _S_VERSION );
	/**
	 * Include custom scripts for the theme
	 */
	wp_enqueue_script( 'my-little-montessorian-general', get_template_directory_uri() . '/js/general.js', array(), _S_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'my_little_montessorian_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Function to add the current page identifier to body class-list so that
 * styles can target specific pages more effectively.
 */
function add_page_identifier_to_body_class() {
	global $post;
	if(isset($post)) $classes[] = "{$post->type}-{$post->name}";
	return $classes;
}

add_filter( 'body_class', 'add_page_identifier_to_body_class' );