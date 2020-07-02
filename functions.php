<?php

require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'id' => 'footer',
    'name' => 'Footer',
    'before_widget' => '<div class="col-md-4 col-sm-12 widget">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  )
);

add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
 	return 'class="link-primary"';
 }


add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280,  720, true);
