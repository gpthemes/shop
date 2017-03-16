<?php if ( is_active_sidebar( 'bottom-1' ) && gp_dynamic_sidebar('bottom-1') != '' ) : ?>
    <div class="row margin-top-30">
        
            <?php dynamic_sidebar( 'bottom-1' ); ?>				
        
    </div>
<?php else : ?>
    <div class="row margin-top-30">
        <div class="portfolio-item col-md-4 animate fadeIn animated">
            <div class="image-hover" style="border:2px dashed #333;height:80px; padding: 30px; display:block;">
                <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add widgets</a></h3>
                <!-- Time to add some widgets! -->
            </div>
        </div>
        
        <div class="portfolio-item col-md-4 animate fadeIn animated">
            <div class="image-hover" style="border:2px dashed #333;height:80px; padding: 30px; display:block;">
                <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add widgets</a></h3>
                <!-- Time to add some widgets! -->
            </div>
        </div>
        
        <div class="portfolio-item col-md-4 animate fadeIn animated">
            <div class="image-hover" style="border:2px dashed #333;height:80px; padding: 30px; display:block;">
                <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add widgets</a></h3>
                <!-- Time to add some widgets! -->
            </div>
        </div>
    </div>
<?php endif; ?>