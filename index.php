<?php  get_header();?>
<div class="popular-post-slider m-5 p-5">
<?php
	$design = get_theme_mod('set_popular_posts_option');
	$limit = get_theme_mod('set_popular_posts_limit');
	$viewBy =  get_theme_mod('set_popular_posts_counting_option');
	echo do_shortcode('[wtpsw_popular_post design="design-'.$design.'" limit="'.$limit.'" view_by="'.$viewBy.'"]'); 
	?>
</div>

<div class="container">

	<div class="row">
		<div class="col-md-8 com-sm-12">
			<div class="row articles container mr-auto ml-auto">
				<?php if(have_posts()): while(have_posts()): the_post() ?>
				    <?php get_template_part('template-parts/content', get_post_format()); ?>
			<?php  endwhile; endif;?>
			</div>
			<?php next_posts_link('Anteriores'); ?><?php previous_posts_link('Próximos')?>
		</div>
		<div class=" col-md-4 mt-5 col-sm-12">
		<div class="row">
		<?php if(is_active_sidebar('posts-sidebar')):
			      dynamic_sidebar('posts-sidebar');
			  endif;
		 ?>
		 <?php if(is_active_sidebar('posts-sidebar2')):
			      dynamic_sidebar('posts-sidebar2');
			  endif;
		 ?>
		 <?php if(is_active_sidebar('posts-sidebar3')):
			      dynamic_sidebar('posts-sidebar3');
			  endif;
		 ?>
		</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>