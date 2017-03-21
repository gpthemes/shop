<?php

/**
 *	Footer Customizer
 */
 
add_action('customize_register', 'gp_footer_customizer');
	
function gp_footer_customizer($wp_customize){
	
	//adding section in wordpress customizer   
	$wp_customize->add_section('footer_settings_section', array(
  		'title'          => 'Footer'
 	));
	
	//adding setting for footer text area
	$wp_customize->add_setting('copy_right_text', array(
 		'default'        => 'Default Text For Footer Section',
 	));
	
	$wp_customize->add_control('copy_right_text', array(
		'label'   => 'Copy Right Text',
		'section' => 'footer_settings_section',
		'type'    => 'textarea',
	));
}

/**
 *	Gulri Slider Customizer
 */
 
add_action('customize_register', 'gp_slider_customizer');

function gp_slider_customizer($wp_customize){
	
	//adding section in wordpress customizer   
	$wp_customize->add_section('gs_slider_settings_section', array(
  		'title'          => 'Slider',
		'priority'   => 30,
 	));
	
	//adding Slider display section settings
	$wp_customize->add_setting('gs_slider_display_section', array(
 		'default'        => 'Slider Settings',
 	));
	//adding Slider display section control
	$wp_customize->add_control('gs_slider_display_section', array(
		'label'   		=> 'Select slider disply option',
		'description' 	=> 'Select pages, posts, products or all where you want to display the slider.',
		'section' 		=> 'gs_slider_settings_section',
		'type'    		=> 'select',
		'choices' => array(
			'value1' => 'All',
			'value2' => 'Pages',
			'value3' => 'Posts',
			'value4' => 'Products',
		),
	));
	
	//adding select Slider settings
	$wp_customize->add_setting('gs_select_slider_section', array(
 		'default'        => 'Select Slider',
 	));
	//adding select Slider control
	$wp_customize->add_control('gs_select_slider_section', array(
		'label'   		=> 'Select slider',
		'description' 	=> 'Select slider layout and effects.',
		'section' 		=> 'gs_slider_settings_section',
		'type'    		=> 'select',
		'choices' => array(
			'value1' => 'a',
			'value2' => 'b',
			'value3' => 'c',
			'value4' => 'd',
		),
	));
	
	//adding create new Slider settings
	$wp_customize->add_setting('gs_create_slider_section', array(
 		'default'        => 'Create Slider',
 	));
	//adding create new Slider control
	$wp_customize->add_control('gs_create_slider_section', array(
		'label'   		=> 'Create New',
		'description' 	=> 'Select slider layout and effects.',
		'section' 		=> 'gs_slider_settings_section',
		'type'    		=> 'url',
	));
}