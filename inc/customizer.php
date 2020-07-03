<?php

function symposium_customizer($wp_customize) {

	$wp_customize->add_section(
		'sec_copyright', array(
			'title' => 'Copyight',
			'description' => 'Copyright'
		)
	);

	$wp_customize->add_setting(
		'sec_copyright', array(
			'type' => 'theme_mod',
			 'default' => 'My name is...',
			 'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'sec_copyright', array(
			'label' => 'Copyright Text',
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);

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

    $wp_customize->add_section(
		'sec_popular_posts', array(
			'title' => 'Popular posts slider',
			'description' => 'Popular posts slider'
		)
	);

	$wp_customize->add_setting(
		'set_popular_posts_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'theme_slug_sanitize_callback'
		)
	);

	$wp_customize->add_control(
		'set_popular_posts_option', array(
			'label' =>  'Choose your design  option here',
			'description' => 'Choose your design type',
			'section' => 'sec_popular_posts',
			'type' => 'select',
			'choices' => array(
        		'1' => 'Design type 1',
        		'2' => 'Design type 2'
        	)
		)
	);

	$wp_customize->add_setting(
		'set_popular_posts_counting_option', array(
			'type' => 'theme_mod',
			'default' => 'views',
			'sanitize_callback' => 'theme_slug_sanitize_callback'
		)
	);

	$wp_customize->add_control(
		'set_popular_posts_counting_option', array(
			'label' =>  'Choose your view options here',
			'description' => 'Choose your design type',
			'section' => 'sec_popular_posts',
			'type' => 'select',
			'choices' => array(
        		'views' => 'By views',
        		'comment_count' => 'By comments'
        	)
		)
	);

	$wp_customize->add_setting(
		'set_popular_posts_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_popular_posts_limit', array(
			'label' => 'Choose the limits of popular  posts',
			'description' => 'Choose the limits  of posts',
			'section' => 'sec_popular_posts',
			'type' => 'number'
		)
	);

}

add_action('customize_register', 'symposium_customizer');


function theme_slug_sanitize_callback($input, $setting){
	$input = sanitize_key($input);
	$choices = $setting->manager->get_control($setting->id)->choices;

	return (array_key_exists($input, $choices) ? $input : $setting->default );

}
