<?php if ( is_active_sidebar( 'footer-top' ) && gp_dynamic_sidebar('footer-top') != '' ) : ?>
    <div class="row margin-top-30">
        
        <?php dynamic_sidebar( 'footer-top' ); ?>
        
    </div>
<?php else : ?>
    <div class="row margin-top-30" >
        <div class="col-md-12 text-center" style="border:2px dashed #333;height:100px;padding:30px;margin-bottom:30px;">
            <h3 class="text-center margin-top-10">
            <a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer top widgets</a>
            </h3>
        </div>
    </div>
	<!-- Time to add some widgets! -->
<?php endif; ?>