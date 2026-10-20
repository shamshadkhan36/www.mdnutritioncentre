<?php
/**
 * MD Nutrition Centre Theme Functions and Definitions
 *
 * @package MD_Nutrition
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function md_nutrition_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 800, 500, true );
    add_image_size( 'md-card-thumb', 600, 400, true );
    add_image_size( 'md-gallery-thumb', 500, 500, true );

    // Register primary navigation menu.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'md-nutrition' ),
        'footer'  => esc_html__( 'Footer Menu', 'md-nutrition' ),
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Set up the WordPress core custom background & logo features.
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Support wide & full alignment blocks.
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'md_nutrition_setup' );

/**
 * Enqueue scripts and styles.
 */
function md_nutrition_scripts() {
    // Google Fonts: Playfair Display + Poppins
    wp_enqueue_style( 
        'md-nutrition-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap', 
        array(), 
        null 
    );

    // Font Awesome 6
    wp_enqueue_style( 
        'font-awesome-6', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', 
        array(), 
        '6.4.0' 
    );

    // Theme main stylesheet
    wp_enqueue_style( 'md-nutrition-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Theme custom scripts
    wp_enqueue_script( 
        'md-nutrition-scripts', 
        get_template_directory_uri() . '/js/theme.js', 
        array(), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'md_nutrition_scripts' );

/**
 * Register widget area / sidebars.
 */
function md_nutrition_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1 (About)', 'md-nutrition' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 1.', 'md-nutrition' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2 (Quick Links)', 'md-nutrition' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 2.', 'md-nutrition' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3 (Services)', 'md-nutrition' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 3.', 'md-nutrition' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4 (Contact Info)', 'md-nutrition' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here to appear in footer column 4.', 'md-nutrition' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'md_nutrition_widgets_init' );

/**
 * Register Custom Post Type: Nutrition Events
 */
function md_nutrition_register_events_cpt() {
    $labels = array(
        'name'               => _x( 'Events', 'post type general name', 'md-nutrition' ),
        'singular_name'      => _x( 'Event', 'post type singular name', 'md-nutrition' ),
        'menu_name'          => _x( 'Events', 'admin menu', 'md-nutrition' ),
        'add_new'            => _x( 'Add New', 'event', 'md-nutrition' ),
        'add_new_item'       => __( 'Add New Event', 'md-nutrition' ),
        'edit_item'          => __( 'Edit Event', 'md-nutrition' ),
        'new_item'           => __( 'New Event', 'md-nutrition' ),
        'view_item'          => __( 'View Event', 'md-nutrition' ),
        'search_items'       => __( 'Search Events', 'md-nutrition' ),
        'not_found'          => __( 'No events found', 'md-nutrition' ),
        'not_found_in_trash' => __( 'No events found in Trash', 'md-nutrition' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type( 'md_event', $args );
}
add_action( 'init', 'md_nutrition_register_events_cpt' );
