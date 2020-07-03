<?php  get_header();?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="row articles container mr-auto ml-auto">
				<?php if(have_posts()): while(have_posts()): the_post() ?>
				    <?php get_template_part('template-parts/content', get_post_format()); ?>
			<?php  endwhile; endif;?>
			</div>
		</div>
		<div class="col-md-4 mt-5">
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