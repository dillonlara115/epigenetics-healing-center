<?php
/**
 * epigenetics healing center functions and definitions
 *
 * @package epigenetics healing center
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'epigenetics_healing_center_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function epigenetics_healing_center_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on epigenetics healing center, use a find and replace
	 * to change 'epigenetics-healing-center' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'epigenetics-healing-center', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'epigenetics-healing-center' ),
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
	add_theme_support( 'custom-background', apply_filters( 'epigenetics_healing_center_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // epigenetics_healing_center_setup
add_action( 'after_setup_theme', 'epigenetics_healing_center_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function epigenetics_healing_center_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'epigenetics_healing_center_widgets_init' );

function who_we_serve_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Who We Serve', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="who-we-serve-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'who_we_serve_widgets_init' );

function resources_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Resources', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="resources-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'resources_widgets_init' );

function specialties_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'specialties', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="specialties-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'specialties_widgets_init' );

function about_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'About', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="about-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'about_widgets_init' );

function contact_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Contact', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-6',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="contact-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'contact_widgets_init' );

function categories_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Categories', 'epigenetics-healing-center' ),
		'id'            => 'sidebar-7',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="categories-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'categories_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function epigenetics_healing_center_scripts() {
	wp_enqueue_style( 'epigenetics-healing-center-style', get_stylesheet_uri() );

	wp_enqueue_script( 'epigenetics-healing-center-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'epigenetics-healing-center-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'epigenetics_healing_center_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// Creates Testitmonials Custom Post Type
function testimonials_init() {
    $args = array(
      'label' => 'Testimonials',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'testimonials'),
        'query_var' => true,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_init' );

// Creates Video Center Custom Post Type
function videos_init() {
    $args = array(
      'label' => 'Video Center',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('category'),  
        'rewrite' => array('slug' => 'videos'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'videos', $args );
}
add_action( 'init', 'videos_init' );

// Creates Peer Reviewed Custom Post Type
function peer_reviews_init() {
    $args = array(
      'label' => 'Peer Reviews',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('category'),  
        'rewrite' => array('slug' => 'peer_reviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'peer_reviews', $args );
}
add_action( 'init', 'peer_reviews_init' );

function recent_posts_function($atts){
   extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));
   query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string .= '<div class="post-block"><h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3><div class="testimonial-video">'.get_the_post_thumbnail().'</div><p>'.get_the_excerpt().'<a href="'.get_permalink().'"> read more</a></p></div><hr>';
      endwhile;
   endif;
   wp_reset_query();
   return $return_string;
}
function register_shortcodes(){
   add_shortcode('recent-posts', 'recent_posts_function');
}
add_action( 'init', 'register_shortcodes');

function peer_review_shortcode_function($atts){
   extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));
   query_posts(array('post_type' => 'peer_reviews', 'orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string .= '<h3>'.get_the_title().'</h3><div>'.get_the_content().'</div><hr>';
      endwhile;
   endif;
   wp_reset_query();
   return $return_string;
}
function register_more_shortcodes(){
   add_shortcode('peer-reviews', 'peer_review_shortcode_function');
}
add_action( 'init', 'register_more_shortcodes');