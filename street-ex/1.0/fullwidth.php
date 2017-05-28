<?php 
/**
 *	Template Name: Full Width
 *
 */
get_header();
 ?>
 	<div class="row margin-vert-30">
        <!-- Main Text -->
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main" role="main">
             <?php if( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>
		
        		<?php get_template_part('template-parts/content', 'page'); ?>  
        
            	<?php endwhile; ?>
			<?php endif; ?>     
		
        	</main>
    	</div>
          
    </div>
   
 <?php 
 get_footer();
  ?>