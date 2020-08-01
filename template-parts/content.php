<<article  class="col-lg-12 article" <?php post_class();?>>
	    <?php  the_post_thumbnail('medium', array('class' => 'img-fluid rounded mb-5')); ?>
		<a href="<?php the_permalink();?>" class="link-article"><h6 class="article-title"><?php the_title(); ?></h6></a>
		<p>Published by   <?php the_author_posts_link(); ?> in <?php echo get_the_date(); ?>  <?php the_category();?>  <?php the_tags();?></p>
		<hr>
		<p><?php  the_content();?></p>
</article>
<?php
$args = array (
    'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __( 'More pages: ', 'symposium' ) . '</span>',
    'after'             => '</div>',
    'link_before'       => '<span class="page-link">',
    'link_after'        => '</span>',
    'next_or_number'    => 'next',
    'separator'         => ' | ',
    'nextpagelink'      => __( 'Next &raquo', 'symposium' ),
    'previouspagelink'  => __( '&laquo Previous', 'symposium' ),
);
 
wp_link_pages( $args );

?>
<?php
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;

?>