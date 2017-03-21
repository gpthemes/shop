<div class="row margin-top-10">
    <!-- Carousel Slideshow -->
<?php if ( is_active_sidebar( 'gp-themes-slider' ) ) : ?>

    <?php dynamic_sidebar( 'gp-themes-slider' ); ?>
    
<?php else : ?>
<div id="carousel-example" class="carousel slide" data-ride="carousel" style="border:2px dashed #333; padding: 30px;border-radius:0;">
    <h3 class="text-center">
    	<a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add slider widget</a>
    </h3>
    
</div>
<?php endif; ?>
    <!-- End Carousel Slideshow -->
</div>