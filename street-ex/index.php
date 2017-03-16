<?php 
/**
 *	Template Name : Default
 *
 */
get_header();
 ?>
        
    <div class="row margin-vert-30">
        <!-- Main Text -->
        <div id="primary" class="content-area col-md-9">
            <main id="main" class="site-main" role="main">
                
            <?php get_template_part( 'template-parts/content' ); ?>
            
            <?php 
            
                the_posts_pagination( array( 
                    'mid_size' 			 => 1,
                    'prev_text'          => __('«'),
                    'next_text'          => __('»'),
                    'before_page_number' => '',
                    'after_page_number'  => '' 
                ) );
            ?>
        
            </main>
        </div>
            <!-- End Main Text -->
            
            <!-- Side Column -->
            <?php get_template_part( 'template-parts/content', 'sidebar-right' ); ?>
            <!-- End Side Column -->
    </div>
   
 <?php 
 get_footer();
  ?>