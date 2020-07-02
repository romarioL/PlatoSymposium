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

<div class="row articles container mr-auto ml-auto">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	      <?php  get_template_part('template-parts/content', 'home'); ?>
<?php  endwhile;
        else: 
        	?>
        	<p>Nenhuma postagem disponível</p>
        <?php
        endif;
        ;?>
</div>

<?php get_footer(); ?>