 <!-- Optional JavaScript -->
 <?php wp_footer(); ?>

 <div class="footer">
 	<div class="container">
	 	<div class="row">
	 		<?php if(is_active_sidebar('Footer')): 
	 			       dynamic_sidebar('Footer');
	 			   endif; ?>
	 	</div>
	</div>
	<div class="copyright">
		<h6><?php echo get_theme_mod('sec_copyright');?></h6>
	</div> 
  </body>
</html>