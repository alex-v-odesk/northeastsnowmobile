<?php

// Load custom stylesheet for customizing Fount
wp_enqueue_style('frm_custom_styles', get_template_directory_uri() . '/../fount-child/assets/css/frm.css');

// Load custom shortcodes
include_once locate_template('/inc/custom-shortcodes.php');

 // Load custom ACF option page
if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Northeast Snowmobile Website Settings',
		'menu_title' 	=> 'NESM',
		'menu_slug' 	=> 'global-config-settings',
		'redirect' 	=> false,
		'position'  => 2
	));

	register_nav_menus(array(
        'util_nav' => 'Utility Navigation'
    ));

}

 ?>