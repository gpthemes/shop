<div id="sidebar-primary" class="col-md-3 sidebar">
                	 
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <aside class="widget"  style="border: 2px dashed rgb(51, 51, 51); height: 160px; padding: 30px;">
            <h3 class="text-center">
                <a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add sidebar widgets</a>
            </h3>
        </aside>                        
        <!-- Time to add some widgets! -->
    <?php endif; ?>
    
</div>