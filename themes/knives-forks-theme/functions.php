<?php

/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if (!function_exists('red_starter_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function red_starter_setup()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'desktop' => esc_html('desktop Menu'), //add more menus here
			'mobile' => esc_html('mobile menu'),
			'hidden' => esc_html('hidden menu')
		));

		// Switch search form, comment form, and comments to output valid HTML5.
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
	}
endif; // red_starter_setup
add_action('after_setup_theme', 'red_starter_setup');

/** Function for adding Advanced Custom Fields 
 */

function register_acf_block_types()
{

	// register a testimonial block.
	acf_register_block_type(array(
		'name'              => 'information blurbs',
		'title'             => __('Information Blurbs'),
		'description'       => __('A custom become a member block.'),
		'render_template'   => 'template-parts/blocks/content-information-blurbs.php',
		//'keywords'          => array( 'testimonial', 'quote' ),
		//'enqueue_style'    	=> get_template_directory_uri(  ),
	));
}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}

// VICTOR'S CUSTOM BLOCK
add_action('acf/init', 'custom_team_block');
function custom_team_block()
{
	if (function_exists('acf_register_block')) {
		acf_register_block(array(
			'name' 				=> 'team',
			'title' 			=> __('Team'),
			'description' 		=> __('custom block for our team'),
			'render_callback' 	=> 'acf_block_render_callback',
			'category'			=> 'formatting',
		));
	}
}

function team_acf_block_render_callback($team)
{

	// convert name ("acf/team") into path friendly slug ("team")
	$slug = $team['name'];

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/blocks/content-{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/blocks/content-{$slug}.php"));
	}
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width()
{
	$GLOBALS['content_width'] = apply_filters('red_starter_content_width', 640);
}
add_action('after_setup_theme', 'red_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html('Sidebar'),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'red_starter_widgets_init');

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css($stylesheet_uri, $stylesheet_dir_uri)
{
	if (file_exists(get_template_directory() . '/build/css/style.min.css')) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter('stylesheet_uri', 'red_starter_minified_css', 10, 2);

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts()
{
	wp_enqueue_style('font-style', 'https://fonts.googleapis.com/css?family=Lato:400,700|Lora:400,700&display=swap');
	wp_enqueue_style('style', get_template_directory_uri() . '/build/css/style.min.css');
	wp_enqueue_style('flickity-styles', 'https://npmcdn.com/flickity@2/dist/flickity.css');

	wp_enqueue_script('servin-scripts', get_template_directory_uri() . '/build/js/servin.min.js', array('jquery'), false, true);
	wp_enqueue_script('flickity-scripts', 'https://npmcdn.com/flickity@2/dist/flickity.pkgd.js', array('jquery'), false, true);
	wp_enqueue_script('for-plugins', get_template_directory_uri() . '/build/js/forplugins.min.js', array('jquery'), false, true);
	wp_enqueue_script('script', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), '20151215', true);
	wp_enqueue_script('red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array('jquery'), '20151215', true);
	wp_enqueue_script('red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array('jquery'), '20151215', true);
	wp_enqueue_style('red-starter-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'red_starter_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function apply_excerpt_length($length)
{
	return 80;
}
add_filter('excerpt_length', 'apply_excerpt_length', 999);
