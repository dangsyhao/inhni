<?php
/**
 * ACF Functions
**/
//Create option page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> __('General Settings', DOMAIN),
        'menu_title'	=> __('Theme options', DOMAIN),
        'menu_slug' 	=> 'athena-theme-settings',
        'capability'	=> 'manage_options',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => __('Blocks', DOMAIN),
        'menu_title'    => __('Blocks', DOMAIN),
        'parent_slug'   => 'athena-theme-settings',
    ));

}
