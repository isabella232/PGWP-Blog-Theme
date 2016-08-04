<?php
if ( ! function_exists( 'pg_blog_setup' ) ) :

function pg_blog_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pg_blog', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pg_blog' ),
        'social'  => __( 'Social Links Menu', 'pg_blog' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // pg_blog_setup

add_action( 'after_setup_theme', 'pg_blog_setup' );


if ( ! function_exists( 'pg_blog_init' ) ) :

function pg_blog_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // pg_blog_setup

add_action( 'init', 'pg_blog_init' );


if ( ! function_exists( 'pg_blog_widgets_init' ) ) :

function pg_blog_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pg_blog_widgets_init' );
endif;// pg_blog_widgets_init



if ( ! function_exists( 'pg_blog_customize_register' ) ) :

function pg_blog_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pg_blog_customize_register' );
endif;// pg_blog_customize_register


if ( ! function_exists( 'pg_blog_enqueue_scripts' ) ) :
    function pg_blog_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Roboto+Condensed:400', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Roboto:400,500,300', false, null, 'all');

    wp_deregister_style( 'style-3' );
    wp_enqueue_style( 'style-3', 'http://fonts.googleapis.com/css?family=Merriweather:400,300,700', false, null, 'all');

    wp_deregister_style( 'wp_core' );
    wp_enqueue_style( 'wp_core', get_template_directory_uri() . '/css/wp_core.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pg_blog_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */

    // Set Theme Content Width http://codex.wordpress.org/Content_Width //

    if ( ! isset( $content_width ) )
    $content_width = 880;

?>