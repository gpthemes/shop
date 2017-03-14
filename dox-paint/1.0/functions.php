<?php
if(!function_exists('pre')){
	function pre($data){
		if(isset($_GET['debug'])){
			pree($data);
		}
	}	 
} 
		
if(!function_exists('pree')){
	function pree($data){
		echo '<pre>';
		print_r($data);
		echo '</pre>';	
	
	}	 
} 

/**
 * Sets up theme defaults and registers support for various WordPress features
 *
 *  It is important to set up these functions before the init hook so that none of these
 *  features are lost.
 *
 *  @since MyFirstTheme 1.0
 *
 *	1.0 - Theme defaults and registers support
 */

if ( ! function_exists( 'gp_dox_paint_setup' ) ) :

	function gp_dox_paint_setup() {
		
		/**
		 *	1.1 - Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );
		
		/**
		 *	1.2 - Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );
		
		/**
		 *	1.3 - Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary' 		=> 	'Primary Menu',
			'secondary' 	=> 	'Secondary Menu',
			'social-links'	=>	'Social Links'
			
		) );
		
		/**
		 *	1.4 - Register sidebars.
		 */
		function gp_dox_paint_sidebars() {
			register_sidebar( array(
				'name'          => __( 'Primary Sidebar', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'sidebar-1',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title margin-bottom-10">',
				'after_title'   => '</h3>',
			) );
		 
			register_sidebar( array(
				'name'          => __( 'Secondary Sidebar', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'sidebar-2',
				'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li></ul>',
				'before_title'  => '<h3 class="widget-title margin-bottom-10">',
				'after_title'   => '</h3>',
			) );
			
			register_sidebar( array(
				'name'          => __( 'Dox Paint Slider', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'gp-dox-paint-slider',
				'before_widget' => '<div id="%1$s" class="widget %2$s slider">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title text-center">',
				'after_title'   => '</h2>',
			) );
			
			register_sidebar( array(
				'name'          => __( 'Before Content', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'before-content',
				'before_widget' => '<div id="%1$s" class="widget %2$s text-center col-md-12">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title text-center">',
				'after_title'   => '</h2>',
			) );
			
			register_sidebar( array(
				'name'          => __( 'Bottom', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'bottom-1',
				'before_widget' => '<div id="%1$s" class="widget %2$s portfolio-item col-md-4 animate fadeIn">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
			
			register_sidebar( array(
				'name'          => __( 'Footer Top', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'footer-top',
				'before_widget' => '<div id="%1$s" class="widget %2$s text-center margin-bottom-30">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title text-center margin-top-10">',
				'after_title'   => '</h2>',
			) );
			
			register_sidebar( array(
				'name'          => __( 'Footer', 'theme_name' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'id'            => 'footer-1',
				'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'gp_dox_paint_sidebars' );
			
	}// End gp_dox_paint_setup Funtion
endif;	
add_action( 'after_setup_theme', 'gp_dox_paint_setup' );

/**
 *	2.0 - Add support for custom logo.
 */
	function gp_dox_paint_custom_logo(){
		$defaults = array(
			'height' => '100',
			'width' => '300',
			'flex-height' => true,
			'flex-width' => true,
			'header-text' => array('site-title', 'site-description')
		); 
		add_theme_support('custom-logo', $defaults);
	}
	

add_action( 'after_setup_theme', 'gp_dox_paint_custom_logo' );

/**
 *	3.0 - Function to check Sidebars have content?
 */
function gp_dynamic_sidebar ($sidebar_id){
	ob_start();
	dynamic_sidebar($sidebar_id);
	$sidebar = ob_get_contents();
	ob_end_clean();
	return $sidebar;
}
/**
 *	4.0 - Customizer Include
 */
	include_once('/inc/gp-customizer.php');

/**
 *	5.0 - Scripts Include
 */
function gp_dox_paint_enqueue_scripts() {
	
	/*
	*	Path variables to assets	
	*/
	$_gp_path = get_stylesheet_directory_uri() . '/assets';
	
	/**
	*	5.1 - Styles 
	*/
	
    wp_enqueue_style( 'gp-dox-paint-bootstrap', $_gp_path.'/css/bootstrap.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-dox-paint-animate', $_gp_path.'/css/animate.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-dox-paint-nexus', $_gp_path.'/css/nexus.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-dox-paint-font-awesome', $_gp_path.'/css/font-awesome.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-dox-paint-responsive', $_gp_path.'/css/responsive.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-dox-paint-custom', $_gp_path.'/css/custom.css', array(), date('Ymhi'));
	
	/**
	*	5.2 - Scripts
	*/ 
	
	wp_enqueue_script( 'gp-dox-paint-jquery', $_gp_path.'/js/jquery.min.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-bootstrap', $_gp_path.'/js/bootstrap.min.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-isotope', $_gp_path.'/js/jquery.isotope.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-slicknav', $_gp_path.'/js/jquery.slicknav.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-visible', $_gp_path.'/js/jquery.visible.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-modernizer', $_gp_path.'/js/modernizr.custom.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-slimbox', $_gp_path.'/js/slimbox2.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-dox-paint-scripts', $_gp_path.'/js/scripts.js', array( 'jquery' ) );
	
}
add_action( 'wp_enqueue_scripts', 'gp_dox_paint_enqueue_scripts' );

/**
 *	6.0 - Modify The Read More Link Text
 *
 */

function modify_read_more_link() {
    return '<a class="more-link btn btn-primary" href="' . get_permalink() . '">Read More <i class="icon-chevron-right readmore-icon"></i></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="more-link btn btn-primary" href="' . get_permalink() . '">Read More <i class="icon-chevron-right readmore-icon"></i></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');