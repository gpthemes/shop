<?php 
/**
 *	Template Name: Page Sidebar Right
 *
 */
get_header();

?>

<div class="row margin-vert-30">
    
    <div class="col-md-9">	 
	<?php get_template_part( 'template-parts/content', 'page' ); ?>       
    </div>
    
	<?php get_template_part( 'template-parts/content', 'sidebar-right' ); ?>

</div>


<?php 
get_footer();
?>