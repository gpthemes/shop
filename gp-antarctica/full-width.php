<?php 
/**
 *	Template Name: Full Width
 *
 */

get_header();
/*global $post;
setup_postdata($post);*/
?>

<div class="row margin-vert-30">
    <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">
	<?php if(have_posts()): ?>
		
		<?php while(have_posts()): the_post(); ?>
			
            <h2><?php the_title(); ?></h2>

			<?php the_content(); ?>
                   
		<?php endwhile; ?>
    
	<?php endif; ?>
    </main>
	</div>
</div>


<?php 
get_footer();
?>
