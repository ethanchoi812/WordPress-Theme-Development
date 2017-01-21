<?php 

function business_customize_register($wp_customize){
	//Banner section
	$wp_customize -> add_section('banner', array(
		'title' => __('Banner', 'business'),
		'description' => sprintf(__('Options for homepage banner')),
		'priority' => 130 
		));	

	//Heading setting
	$wp_customize -> add_setting('banner_heading', array(
			'default' 	=> _x('Banner Heading', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Heading control
	$wp_customize -> add_control('banner_heading', array(
			'label' 	=> __('Heading', 'business'),
			'section' 	=> 'banner',
			'priority'	=> 20
		));

	//Text setting
	$wp_customize -> add_setting('banner_text', array(
			'default' 	=> _x('Vivamus rutrum dui at lorem ultrices, eget tincidunt nisl tincidunt. Sed feugiat arcu at interdum lacinia.', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Text control
	$wp_customize -> add_control('banner_text', array(
			'label' 	=> __('Text', 'business'),
			'section' 	=> 'banner',
			'priority'	=> 20
		));

	//Button Text setting
	$wp_customize -> add_setting('banner_btn_text', array(
			'default' 	=> _x('Sign Up', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Button Text control
	$wp_customize -> add_control('banner_btn_text', array(
			'label' 	=> __('Button Text', 'business'),
			'section' 	=> 'banner',
			'priority'	=> 20
		));

	//Button URL setting
	$wp_customize -> add_setting('banner_btn_url', array(
			'default' 	=> _x('http://test.com', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Button URL control
	$wp_customize -> add_control('banner_btn_url', array(
			'label' 	=> __('Button URL', 'business'),
			'section' 	=> 'banner',
			'priority'	=> 20
		));

	//Background Image setting
	$wp_customize -> add_setting('banner_image', array(
			'default' 	=> get_bloginfo('template_directory').'/img/banner.jpg',
			'type' 		=> 'theme_mod'
		));

	//Background control
	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
			'label'		=> __('Background Image', 'business'),
			'section' 	=> 'banner',
			'settings'	=> 'banner_image'
		)));

	//Boxes section
	$wp_customize -> add_section('boxes', array(
		'title' => __('Boxes', 'business'),
		'description' => sprintf(__('Options for homepage boxes')),
		'priority' => 130 
		));	

	//Box 1
	//Box 1 Heading Setting
	$wp_customize -> add_setting('box1_heading', array(
			'default' 	=> _x('Box1 Heading', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 1 Heading control
	$wp_customize -> add_control('box1_heading', array(
			'label' 	=> __('Box 1 Heading', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 1 Text setting
	$wp_customize -> add_setting('box1_text', array(
			'default' 	=> _x('Vivamus rutrum dui at lorem ultrices, eget nisl tincidunt.', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box1 Text control
	$wp_customize -> add_control('box1_text', array(
			'label' 	=> __('Box 1 Text', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 1 Icon setting
	$wp_customize -> add_setting('box1_icon', array(
			'default' 	=> _x('bar-chart', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box1 Icon control
	$wp_customize -> add_control('box1_icon', array(
			'label' 	=> __('Box 1 Icon', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 2
	//Box 2 Heading Setting
	$wp_customize -> add_setting('box2_heading', array(
			'default' 	=> _x('Box2 Heading', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 2 Heading control
	$wp_customize -> add_control('box2_heading', array(
			'label' 	=> __('Box 2 Heading', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 2 Text setting
	$wp_customize -> add_setting('box2_text', array(
			'default' 	=> _x('Vivamus rutrum dui at lorem ultrices, eget nisl tincidunt.', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 2 Text control
	$wp_customize -> add_control('box2_text', array(
			'label' 	=> __('Box 2 Text', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 2 Icon setting
	$wp_customize -> add_setting('box2_icon', array(
			'default' 	=> _x('code', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 2 Icon control
	$wp_customize -> add_control('box2_icon', array(
			'label' 	=> __('Box 2 Icon', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 3
	//Box 3 Heading Setting
	$wp_customize -> add_setting('box3_heading', array(
			'default' 	=> _x('Box3 Heading', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 3 Heading control
	$wp_customize -> add_control('box3_heading', array(
			'label' 	=> __('Box 3 Heading', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 3 Text setting
	$wp_customize -> add_setting('box3_text', array(
			'default' 	=> _x('Vivamus rutrum dui at lorem ultrices, eget nisl tincidunt.', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 3 Text control
	$wp_customize -> add_control('box3_text', array(
			'label' 	=> __('Box 3 Text', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));

	//Box 3 Icon setting
	$wp_customize -> add_setting('box3_icon', array(
			'default' 	=> _x('desktop', 'business'),
			'type' 		=> 'theme_mod'
		));

	//Box 3 Icon control
	$wp_customize -> add_control('box3_icon', array(
			'label' 	=> __('Box 3 Icon', 'business'),
			'section' 	=> 'boxes',
			'priority'	=> 20
		));
}

add_action('customize_register', 'business_customize_register');