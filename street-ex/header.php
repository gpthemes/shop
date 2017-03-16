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
                <?php get_template_part( 'template-parts/header', 'site-branding' ); ?>
                <!-- End Logo -->
                <!-- Top Menu -->
                
				<?php if(has_nav_menu( 'primary' )): ?>

                     <?php get_template_part( 'template-parts/navigation', 'primary' ); ?>

                <?php endif; ?> 
				
				<!-- End Top Menu -->
			</div>
		</div>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
        <div id="content" class="container">
