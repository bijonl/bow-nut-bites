<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// 🔧 Define theme version
$theme = wp_get_theme();
define( 'PW_THEME_CHILD_VERSION', $theme->get( 'Version' ) );

require_once get_stylesheet_directory() . '/includes/nav-menus.php';
require_once get_stylesheet_directory() . '/includes/custom-post-types/events.php';

add_image_size('square-image', 600, 600); 
add_image_size('landscape', 600, 400); 



function pw_enqueue_scripts() {
    wp_enqueue_style(
        'child-google-fonts',
        'https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap&family=Open+Sans:wght@400;500;600;700&display=swap',
        false
    );


    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/assets/dist/css/style.min.css', [], PW_THEME_CHILD_VERSION );


    
    // JS if needed
    wp_enqueue_script( 'pw-main', get_template_directory_uri()  . '/assets/js/main.js', [], PW_THEME_CHILD_VERSION, true );

      // Font Awesome 6 CDN (replace with your preferred version if needed)
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css',
        [],
        '6.5.0'
    );
}

function pw_enqueue_glightbox_assets() {
    wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css');
    wp_enqueue_script('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);

    // Optionally initialize after DOM loads
    wp_add_inline_script('glightbox', 'document.addEventListener("DOMContentLoaded", function() { GLightbox({ selector: ".glightbox" }); });');
}

add_action('wp_enqueue_scripts', 'pw_enqueue_glightbox_assets');
add_action( 'wp_enqueue_scripts', 'pw_enqueue_scripts', 20 );
add_action( 'enqueue_block_editor_assets', 'pw_enqueue_scripts' );

function child_disable_gutenberg( $use_block_editor, $post ) {
    if ( $post && get_page_template_slug( $post->ID ) === 'page-events-template.php' ) {
        remove_post_type_support( 'page', 'editor' );
        return false;
    }

    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'child_disable_gutenberg', 11, 2 );

add_action('acf/init', 'pw_event_subpage'); 

function pw_event_subpage() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
        'page_title'    => 'Event Settings',
        'menu_title'    => 'Event Settings',
        'parent_slug'   => 'edit.php?post_type=events',
    ));

  }
}; 

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAmBuN8FAY5ut7wvJsMwIDoyRJq0YA9y-o');
}
add_action('acf/init', 'my_acf_init');

// functions.php in your child theme
function pw_child_register_theme_setup() {
    // Add WooCommerce support
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'pw_child_register_theme_setup' );




?>




