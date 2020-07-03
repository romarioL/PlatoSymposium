<?php  get_header();?>

<div class="row articles container mr-auto ml-auto">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<?php get_template_part('template-parts/content', 'category'); ?>
<?php  endwhile; endif;?>
<?php next_posts_link('Anteriores'); ?><?php previous_posts_link('Próximos')?>
</div>
<?php get_footer(); ?>