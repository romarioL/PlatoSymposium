 <!-- Optional JavaScript -->
 <?php wp_footer(); ?>

 <div class="footer">
 	<div class="row">
 		<?php if(is_active_sidebar('Footer')): 
 			       dynamic_sidebar('Footer');
 			   endif; ?>
 	</div>
 	<div class="copyright">
 		<h6><?php  echo get_theme_mod('sec_copyright');?></h6>
 	</div>
 </div>
  </body>
</html>