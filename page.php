<?php  get_header();?>

<div class="row articles container mr-auto ml-auto">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	<div class="col-lg-12 article">
		<?php  the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded mb-5')); ?>
		<h6 class="article-title"><?php the_title(); ?></h6>
		<p><?php  the_content();?></p>
	</div>
<?php  endwhile; endif;?>
</div>
<?php get_footer(); ?>