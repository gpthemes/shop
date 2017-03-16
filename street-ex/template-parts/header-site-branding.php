<div class="logo">
    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
            echo '<img src="'. esc_url( $logo[0] ) .'">';
        } else {
            echo '<img src="'. get_template_directory_uri().'/assets/img/logo.png" alt="'.get_bloginfo('name').'"/>';
        }
         
        ?>
    </a>                
</div>