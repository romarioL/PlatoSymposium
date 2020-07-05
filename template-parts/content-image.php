<article class="col-lg-12 article">
		<a href="<?php the_permalink();?>" class="link-article"><h6 class="article-title"><?php the_title(); ?></h6></a>
		<hr>
		<p><?php  the_post_thumbnail(array(300,300));?></p>
		<?php the_content(); ?>
</article>