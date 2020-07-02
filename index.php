<?php  get_header();?>
<div class="row text-banners container mr-auto ml-auto">
	<div class="col-lg-4 col-md-12 text-banner">
		<h6 class="text-banner-title"> Por que os gays devem saber sua história?</h6>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
	</div>
	<div class="col-lg-4 col-md-12 text-banner">
		<h6 class="text-banner-title">Por que transativistas  são  tão ditatoriais?</h6>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
	</div>
	<div class="col-lg-4 col-md-12 text-banner">
		<h6 class="text-banner-title"> Fatos da história gay que não te contam:</h6>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
	</div>
</div>

<div class="row articles container mr-auto ml-auto">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	<div class="col-lg-12 article">
		<a href="<?php the_permalink();?>" class="link-article"><h6 class="article-title"><?php the_title(); ?></h6></a>
		<p><?php  the_excerpt();?></p>
	</div>
<?php  endwhile; endif;?>
</div>
<?php get_footer(); ?>