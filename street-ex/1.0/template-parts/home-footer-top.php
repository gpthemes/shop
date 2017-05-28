<?php if ( is_active_sidebar( 'footer-top' ) && gp_dynamic_sidebar('footer-top') != '' ) : ?>
    <div class="row margin-top-30">
        
        <?php dynamic_sidebar( 'footer-top' ); ?>
        
    </div>
<?php else : ?>
    <div class="row margin-top-30" >
        <?php echo do_shortcode('[gmap-embed id="152"]'); ?>
    </div>
	<!-- Time to add some widgets! -->
<?php endif; ?>