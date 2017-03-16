<?php if ( is_active_sidebar( 'before-content' ) ) : ?>
        <div class="row margin-top-30">
            
            <?php dynamic_sidebar( 'before-content' ); ?>
        
        </div>
    <?php else : ?>
        <div class="row margin-top-30">
            <div class="col-md-12 text-center"  style="border:2px dashed #333; padding: 30px;">
                <h3>
                <a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add Before Content widget</a>
                </h3>
            </div>
                <!-- Time to add some widgets! -->
        </div>
<?php endif; ?>
