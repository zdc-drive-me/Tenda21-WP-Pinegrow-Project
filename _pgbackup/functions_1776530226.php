<?php
if ( ! function_exists( 'tenda21_setup' ) ) :

function tenda21_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'tenda21', get_template_directory() . '/languages' );
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
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'tenda21' ),
        'social'  => __( 'Social Links Menu', 'tenda21' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'footer_block_one', __( 'Footer menu Block 1', 'tenda21' )  );

    register_nav_menu(  'footer_block_two', __( 'Footer menu Block 2', 'tenda21' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
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

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // tenda21_setup

add_action( 'after_setup_theme', 'tenda21_setup' );


if ( ! function_exists( 'tenda21_init' ) ) :

function tenda21_init() {

    
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
endif; // tenda21_setup

add_action( 'init', 'tenda21_init' );


if ( ! function_exists( 'tenda21_custom_image_sizes_names' ) ) :

function tenda21_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'tenda21_custom_image_sizes_names' );
endif;// tenda21_custom_image_sizes_names



if ( ! function_exists( 'tenda21_widgets_init' ) ) :

function tenda21_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'tenda21_widgets_init' );
endif;// tenda21_widgets_init



if ( ! function_exists( 'tenda21_customize_register' ) ) :

function tenda21_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'tenda21_customize_register' );
endif;// tenda21_customize_register


if ( ! function_exists( 'tenda21_enqueue_scripts' ) ) :
    function tenda21_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'tenda21-tailwind' );
    wp_enqueue_style( 'tenda21-tailwind', get_template_directory_uri() . '/tailwind_theme/tailwind.css', [], '1.0.104', 'all');

    wp_deregister_style( 'tenda21-style' );
    wp_enqueue_style( 'tenda21-style', get_bloginfo('stylesheet_url'), [], '1.0.104', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'tenda21_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_Blocks_v4' ) ) { require_once "inc/wp_pg_blocks_helpers.php"; }
if( !class_exists( 'PG_Smart_Walker_Nav_Menu' ) ) { require_once "inc/wp_smart_navwalker.php"; }

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with Pinegrow */

if ( ! function_exists('tenda21_blocks_init') ) :
function tenda21_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/event-booking-meta/event-booking-meta_register.php';
    require_once 'blocks/event-hero/event-hero_register.php';
    require_once 'blocks/event-date-meta/event-date-meta_register.php';
    require_once 'blocks/event-row/event-row_register.php';
    require_once 'blocks/events-list/events-list_register.php';
    require_once 'blocks/events-hero/events-hero_register.php';
    require_once 'blocks/experience-back-nav/experience-back-nav_register.php';
    require_once 'blocks/experience-card/experience-card_register.php';
    require_once 'blocks/experience-content/experience-content_register.php';
    require_once 'blocks/experience-cta/experience-cta_register.php';
    require_once 'blocks/experience-facilitator/experience-facilitator_register.php';
    require_once 'blocks/experiences-cta/experiences-cta_register.php';
    require_once 'blocks/experience-hero/experience-hero_register.php';
    require_once 'blocks/experiences-grid/experiences-grid_register.php';
    require_once 'blocks/experiences-hero/experiences-hero_register.php';
    require_once 'blocks/facilitator-card/facilitator-card_register.php';
    require_once 'blocks/facilitator-cta/facilitator-cta_register.php';
    require_once 'blocks/facilitator-hero/facilitator-hero_register.php';
    require_once 'blocks/facilitator-meta/facilitator-meta_register.php';
    require_once 'blocks/facilitator-upcoming-events/facilitator-upcoming-events_register.php';
    require_once 'blocks/facilitators-grid/facilitators-grid_register.php';
    require_once 'blocks/facilitator-specialties/facilitator-specialties_register.php';
    require_once 'blocks/facilitators-hero/facilitators-hero_register.php';
    require_once 'blocks/experience-upcoming-events/experience-upcoming-events_register.php';
    require_once 'blocks/tenda21-page-hero-host/tenda21-page-hero-host_register.php';
    require_once 'blocks/tenda21-host-profile/tenda21-host-profile_register.php';
    require_once 'blocks/main-navigation/main-navigation_register.php';
    require_once 'blocks/hero-tenda21/hero-tenda21_register.php';
    require_once 'blocks/philosophy/philosophy_register.php';
    require_once 'blocks/experiences-block-index/experiences-block-index_register.php';
    require_once 'blocks/space-gallery/space-gallery_register.php';
    require_once 'blocks/practical-info/practical-info_register.php';
    require_once 'blocks/cta-invitation/cta-invitation_register.php';
    require_once 'blocks/footer/footer_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'tenda21_blocks_init');
endif;

/* End of creating Editor Blocks with Pinegrow */


/* Setting up theme supports options */

function tenda21_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */
    
//Enable site editor                    
add_theme_support('block-templates');
add_theme_support('block-template-parts');    
//Tell WP to scope loaded editor styles to the block editor                    
add_theme_support( 'editor-styles' );
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'tenda21_setup_theme_supports');

/* End of setting up theme supports options */


/* Loading editor styles for blocks */

function tenda21_add_blocks_editor_styles() {
// Add blocks editor styles. Don't edit anything between the following comments.
/* Pinegrow generated Load Blocks Editor Styles Begin */
    add_editor_style( 'tailwind_theme/tailwind_for_wp_editor.css' );

    /* Pinegrow generated Load Blocks Editor Styles End */
}
add_action('admin_init', 'tenda21_add_blocks_editor_styles');

/* End of loading editor styles for blocks */


/* Control how block assets are loaded on the front-end */
function tenda21_should_load_separate_core_block_assets() {
    /* Pinegrow generated Load Block Assets Separately Begin */
    //Load only assets of blocks that are used on the page
    add_filter( 'should_load_separate_core_block_assets', '__return_true' );

    /* Pinegrow generated Load Block Assets Separately End */
}
add_action('init', 'tenda21_should_load_separate_core_block_assets');
/* End of controlling how block assets are loaded on the front-end */


/* Register Blocks Categories */

function tenda21_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'tenda21_blocks',
        'title' => __( 'Tenda21 Blocks', 'tenda21' )
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'tenda21_register_blocks_categories');

/* End of registering Blocks Categories */

?>