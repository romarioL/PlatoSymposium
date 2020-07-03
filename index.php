<?php  get_header();?>
<div class="row articles container mr-auto ml-auto">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	    <?php get_template_part('template-parts/content', get_post_format()); ?>
<?php  endwhile; endif;?>
</div>
<?php get_footer(); ?>