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