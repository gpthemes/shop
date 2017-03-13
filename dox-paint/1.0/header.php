<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<!-- Title -->
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<!-- Meta -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="
		<?php 
		if( is_single() ){ 
			single_post_title('', true); 
		}else { 
			bloginfo('name'); echo "-"; bloginfo('description'); 
		} 
		?>
    ">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
wp_head();
?>
</head>
<body <?php body_class(); ?>>
	<div id="pre_header" class="visible-lg"></div>
    
		<div id="header" class="container">
			<div class="row">
				<!-- Logo -->
                <div class="logo">
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        //echo $custom_logo_id;
                        //exit;
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="'. esc_url( $logo[0] ) .'">';
                        } else {
                            echo '<img src="'. get_template_directory_uri().'/assets/img/logo.png" alt="'.get_bloginfo('name').'"/>';
                        }
                         
                        ?>
    <!--					<img src="assets/img/logo.png" alt="Logo" />-->
                    </a>
                </div>
                <!-- End Logo -->
                <!-- Top Menu -->
                <div class="col-md-12 margin-top-30">
                    <div id="hornav" class="pull-right visible-lg">
                        <?php 
                        if(has_nav_menu( 'primary' )){
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
                        }
                        ?>
                    </div>
                </div>
				<div class="clear"></div>
				<!-- End Top Menu -->
			</div>
		</div>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
        <div id="content" class="container">
