<?php 
/**
 *	Template Name: Page Sidebar Left Right
 *
 */
get_header();

?>

<div class="row margin-vert-30">
    <?php get_template_part( 'template-parts/content', 'sidebar-left' ); ?>
    <div class="col-md-6">
    	<?php if( have_posts() ): ?>
			<?php while( have_posts() ): the_post(); ?>	 
	
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
    
            <?php endwhile; ?>
        <?php endif; ?>       
    </div>
	<?php get_template_part( 'template-parts/content', 'sidebar-right' ); ?>
</div>


<?php 
get_footer();
?>