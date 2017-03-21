<?php 
/**
 *	Template Name: Page Sidebar Left
 *
 */
get_header();

?>

<div class="row margin-vert-30">
    
	<?php get_template_part( 'template-parts/content', 'sidebar-left' ); ?>
    
    <div class="col-md-9">	 
		<?php get_template_part( 'template-parts/content', 'page' ); ?>       
    </div>
</div>


<?php 
get_footer();
?>