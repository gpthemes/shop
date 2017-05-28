<div class="row margin-top-10">
    <!-- Carousel Slideshow -->
<?php if ( is_active_sidebar( 'gp-themes-slider' ) ) : ?>

    <?php dynamic_sidebar( 'gp-themes-slider' ); ?>
    
<?php else : ?>
	<?php if ( function_exists( "easingslider" ) ) { easingslider( 151 ); } ?>
<?php endif; ?>
    <!-- End Carousel Slideshow -->
</div>