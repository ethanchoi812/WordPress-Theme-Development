<?php 
require_once('wp_bootstrap_navwalker.php');

//Theme Support
function business_theme_setup(){

	//Logo support
	add_theme_support('custom-logo');
	
	register_nav_menus(array(
		'primary'	=> __('Primary Menu')
		));
}

add_action('after_setup_theme', 'business_theme_setup');

//Customizer File
require get_template_directory().'/inc/customizer.php';