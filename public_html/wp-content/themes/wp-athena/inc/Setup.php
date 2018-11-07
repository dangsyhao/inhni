<?php
/**
 * Enqueue scripts and styles.
**/
function athena_scripts() {
    // Styles
    wp_enqueue_style( 'main-style', ASSETS_PATH.'css/main.css', array(), null );
   // wp_enqueue_style( 'print-style', ASSETS_PATH.'css/print.css',array(), null );

    // Scripts
    wp_enqueue_script( 'main-script', ASSETS_PATH.'js/main.js', array('jquery'), null, true );

    wp_localize_script( 'main-script', 'wp_localize',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'homeurl' => get_home_url()
        )
    );
    wp_enqueue_script( 'main-script' );

}
add_action( 'wp_enqueue_scripts', 'athena_scripts' );

/**
 * Register Menu
**/
add_action('init', 'athena_setup');
function athena_setup(){
    register_nav_menus( array(
        'athena_main_menu' => __('Main Menu', DOMAIN)
    ) );
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'page', 'excerpt' );
}

/**
 * Add Theme Support -Post Formats
 **/

add_theme_support( 'post-formats', array( 'aside', 'gallery','link','image' ) );

