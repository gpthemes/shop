<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
<div class="row">
    <div class="col-md-12 margin-bottom-20">
        
        <?php dynamic_sidebar( 'footer-1' ); ?>
            
        <div class="clearfix"></div>
    </div>
</div>
<?php else : ?>
<div class="row">    
    <div class="col-md-3 margin-bottom-20">
        <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
        </div>
    </div>
    
    <div class="col-md-3 margin-bottom-20">
        <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
        </div>
    </div>
    
    <div class="col-md-3 margin-bottom-20">
        <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
        </div>
    </div>
    
    <div class="col-md-3 margin-bottom-20">
        <div class="image-hover" style="border:2px dashed #fff;height:120px; padding: 30px;">
        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer widgets</a></h3>
        </div>
    </div>
</div>
    <!-- Time to add some widgets! -->
<?php endif; ?>