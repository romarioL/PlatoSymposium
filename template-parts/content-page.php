<article class="col-lg-12 article">
		<?php  the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded mb-5')); ?>
		<h6 class="article-title"><?php the_title(); ?></h6>
		<p>Published by   <?php the_author_posts_link(); ?> in <?php echo get_the_date(); ?></p>
		<hr>
		<p><?php  the_content();?></p>
</article>