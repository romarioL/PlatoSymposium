<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  </head>
  <?php wp_head(); ?>
  <body <?php body_class(); ?>>
  <?php
  if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}

?>


   <nav class="navbar navbar-expand-md navbar-light bg-faded">
   	<a class="navbar-brand" href="#"><?php  the_custom_logo(); ?></a>
   	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
  	 </button>
	   <?php
	   wp_nav_menu([
	     'menu'            => 'top',
	     'theme_location'  => 'top',
	     'container'       => 'div',
	     'container_id'    => 'bs4navbar',
	     'container_class' => 'collapse navbar-collapse',
	     'menu_id'         => false,
	     'menu_class'      => 'navbar-nav mr-auto',
	     'depth'           => 2,
	     'fallback_cb'     => 'bs4navwalker::fallback',
	     'walker'          => new bs4navwalker()
	   ]);
	   ?>
	</nav>

<!--	<div class=" col col-lg-12 col-sm-12 banner" >></div> -->

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />