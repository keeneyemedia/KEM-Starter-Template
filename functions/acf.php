<?php
/* ========================================================================================================================
ADVANCED CUSTOM FIELDS
======================================================================================================================== */
// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/functions/advanced-custom-fields-pro/';
    return $path;
}
 
// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    // update path
    $dir = get_stylesheet_directory_uri() . '/functions/advanced-custom-fields-pro/';
    return $dir;
}
 
// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/functions/advanced-custom-fields-pro/acf.php' );


//Create options pages
/*if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title'	=> 'Site General Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
	    'page_title' => 'Documentation',
	    'menu_title' => 'Documentation',
	    'parent_slug'	=> 'site-general-settings',
	));
}*/