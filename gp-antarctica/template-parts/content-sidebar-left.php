<div id="sidebar-secondary" class="col-md-3 sidebar">
                	 
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    <?php else : ?>
        <aside class="widget panel panel-default"  style="border: 2px dashed rgb(51, 51, 51); height: 160px; padding: 30px;">
            <div class="panel-heading">
                <h3 class="text-center">
                    <a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add sidebar widgets</a>
                </h3>
			</div>
        </aside>                        
        <!-- Time to add some widgets! -->
    <?php endif; ?>
    
</div>