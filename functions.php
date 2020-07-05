<?php
require_once(dirname(__FILE__) . '/inc/bs4navwalker.php');
require_once(dirname(__FILE__) . '/inc/class-tgm-plugin-activation.php');
require_once(dirname(__FILE__) . '/inc/required-plugins.php');
require_once(dirname(__FILE__) . '/inc/customizer.php');




function load_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('fonts-css','https://fonts.googleapis.com/css2?family=Montserrat&display=swap', array(), '4.3.1', 'all');
	wp_enqueue_style('template', get_template_directory_uri().  '/css/template.css', array(), '1.0.0', 'all');
	wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'load_scripts');



function symposium_config(){
	register_nav_menu('top', 'Top menu');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
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
		  ));


		register_sidebar(array(
			'id' => 'home-text1',
			'name' => 'Home text 1',
			'before_widget' => '<div class="col-lg-4 col-md-12 text-banner">',
			'after_widget'=> '</div>',
			'before_title' => '<h6 class="text-banner-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'home-text2',
			'name' => 'Home text 2',
			'before_widget' => '<div class="col-lg-4 col-md-12 text-banner">',
			'after_widget'=> '</div>',
			'before_title' => '<h6 class="text-banner-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'home-text3',
			'name' => 'Home text 3',
			'before_widget' => '<div class="col-lg-4 col-md-12 text-banner">',
			'after_widget'=> '</div>',
			'before_title' => '<h6 class="text-banner-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'posts-sidebar',
			'name' => 'Posts sidebar',
			'before_widget' => '<div class="col-sm-12 text-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h6 class="text-sidebar-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'posts-sidebar2',
			'name' => 'Posts sidebar 2',
			'before_widget' => '<div class=" col-sm-12 text-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h6 class="text-sidebar-title">',
			'after_title' => '</h6>'
		));

		register_sidebar(array(
			'id' => 'posts-sidebar3',
			'name' => 'Posts sidebar 3',
			'before_widget' => '<div class=" col-sm-12 text-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h6 class="text-sidebar-title">',
			'after_title' => '</h6>'
		));

 }

 add_filter('widgets_init', 'symposium_sidebars');


add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
 	return 'class="link-primary mb-5"';
 }


add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280,  720, true);
