<?php

require_once('bs4navwalker.php');


function load_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('template', get_template_directory_uri().  '/css/template.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');



function symposium_config(){
	register_nav_menu('top', 'Top menu');
}

 add_action('after_setup_theme', 'symposium_config');


 function symposium_sidebars(){
		  register_sidebar(array(
		    'id' => 'footer',
		    'name' => 'Footer',
		    'before_widget' => '<div class="col-md-4 col-sm-12 widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h6>',
		    'after_title' => '</h6>',
		  )
		);


		register_sidebar(array(
			'id' => 'home-text1'
			'name' => 'Home text 1',
			'before_widget' => '<div class="col-lg-4 col-md-12 text-banner">',
			'after_widget'=> '</div>',
			'before_title' => '<h6 class="text-banner-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'home-text2'
			'name' => 'Home text 2',
			'before_widget' => '<div class="col-lg-4 col-md-12 text-banner">',
			'after_widget'=> '</div>',
			'before_title' => '<h6 class="text-banner-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'home-text3'
			'name' => 'Home text 3',
			'before_widget' => '<div class="col-lg-4 col-md-12 text-banner">',
			'after_widget'=> '</div>',
			'before_title' => '<h6 class="text-banner-title">',
			'after_title' => '</h6>'
		));

 }

 add_filter('widgets_init', 'symposium_sidebars');


add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
 	return 'class="link-primary"';
 }


add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280,  720, true);