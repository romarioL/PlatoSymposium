<?php

function symposium_customizer($wp_customize) {

	$wp_customize->add_section(
		'sec_slider', array(
			'title' => 'Slider',
			'description' => 'Section slider'
		)
	);

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'theme_slug_sanitize_callback'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' =>  'Choose your design  option here',
			'description' => 'Choose your design type',
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
        		'1' => 'Design type 1',
        		'2' => 'Design type 2',
        		'3' => 'Design type 3',
        		'4' => 'Design type 4'
        	)
		)
	);

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => 'Choose the limits of posts',
			'description' => 'Choose the limits  of posts',
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);

}

add_action('customize_register', 'symposium_customizer');


function theme_slug_sanitize_callback($input, $setting){
	$input = sanitize_key($input);
	$choices = $setting->manager->get_control($setting->id)->choices;

	return (array_key_exists($input, $choices) ? $input : $setting->default);

}
