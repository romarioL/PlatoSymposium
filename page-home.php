<?php  get_header();?>
<div class="row text-banners container mr-auto ml-auto">
	<?php if(is_active_sidebar('home-text1')):

			dynamic_sidebar('home-text1');

	     endif;

	     ?>

	  <?php if(is_active_sidebar('home-text2')):

			dynamic_sidebar('home-text2');

	     endif;

	     ?>


	   <?php if(is_active_sidebar('home-text3')):

			dynamic_sidebar('home-text3');

	     endif;

	     ?>

</div>
<div class="slider">
	<?php 
	$design = get_theme_mod('set_slider_option');
	$limit = get_theme_mod('set_slider_limit');
	echo do_shortcode('[recent_post_slider design="' . $design .'" limit="'. $limit.'"]');
	?>
</div>

<?php get_footer(); ?>