<article class="col-lg-12 article">
	    <?php  the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded mb-5')); ?>
		<a href="<?php the_permalink();?>" class="link-article"><h6 class="article-title"><?php the_title(); ?></h6></a>
		<p>Published by   <?php the_author_posts_link(); ?> in <?php echo get_the_date(); ?>  <?php the_category();?>  <?php the_tags();?></p>
		<hr>
		<p><?php  the_content();?></p>
</article>