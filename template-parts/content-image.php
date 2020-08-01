<article class="col-lg-12 article" <?php post_class();?>>
		<a href="<?php the_permalink();?>" class="link-article"><h6 class="article-title"><?php the_title(); ?></h6></a>
		<hr>
        <?php  the_post_thumbnail('medium', array('class' => 'img-fluid rounded mb-5')); ?>
		<?php the_content(); ?>
</article>