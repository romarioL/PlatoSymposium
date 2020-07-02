<?php  get_header();?>

<div class="row articles container mr-auto ml-auto">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	<div class="col-lg-12 article">
		<a href="<?php the_permalink();?>" class="link-article"><h6 class="article-title"><?php the_title(); ?></h6></a>
		<p><?php  the_excerpt();?></p>
	</div>
<?php  endwhile; endif;?>
</div>
<?php get_footer(); ?>