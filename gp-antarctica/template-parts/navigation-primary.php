<div class="col-md-12 margin-top-30">
    <div id="hornav" class="pull-right visible-lg">
    <?php 
    
        wp_nav_menu( array( 
            'theme_location'  => 'primary',
            'menu'            => 'Primary Navigation',
            'container'       => false,
            'container_class' => '',
            'menu_class'      => 'menu',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>'
        ) );	
    
    ?>
    </div>
</div>
<div class="clear"></div>