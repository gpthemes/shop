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

if ( ! function_exists( 'gp_themes_setup' ) ) :

	function gp_themes_setup() {
		
		/**
		 *	1.1 - Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );
		
		 /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded  tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		/**
		 *	1.2 - Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );
		
		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );
		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
	 
		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		) );
		
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
		function gp_themes_sidebars() {
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
				'id'            => 'gp-themes-slider',
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
		add_action( 'widgets_init', 'gp_themes_sidebars' );
		
							
	}// End gp_themes_setup Funtion
endif;	
add_action( 'after_setup_theme', 'gp_themes_setup' );

// setup navigation automatically
add_action('load-nav-menus.php', 'auto_nav_creation_primary');
function auto_nav_creation_primary(){
	$name = 'Navigation';
	$menu_exists = wp_get_nav_menu_object($name);
	if( !$menu_exists){
		$menu_id = wp_create_nav_menu($name);
		$menu = get_term_by( 'name', $name, 'nav_menu' );


		wp_update_nav_menu_item($menu->term_id, 0, array(
			'menu-item-title' =>  __('Topics'),
			'menu-item-classes' => 'topics-dropdown',
			'menu-item-url' => '#',
			'menu-item-type' => 'custom',
			'menu-item-status' => 'publish'));

		$cat_args=array(
	        'exclude' => '1,10',
	        'hide_empty' => 0
        );
        $the_cats = get_categories($cat_args);
        if (count($the_cats) > 0){
            foreach($the_cats as $category){
				wp_update_nav_menu_item($menu->term_id, 0, array(
				    'menu-item-title' => $category->name,
				    'menu-item-object-id' => $category->term_id,
				    'menu-item-db-id' => 0,
				    'menu-item-object' => 'category',
				    'menu-item-parent-id' => 5,
				    'menu-item-depth' => 1,
				    'menu-item-type' => 'taxonomy',
				    'menu-item-url' => get_category_link($category->term_id),
				    'menu-item-status' => 'publish',)
				);
			}
        }
		$event_cat_args=array(
	        'include' => '10',
	        'hide_empty' => 0
        );
        $eventCat = get_categories($event_cat_args);
        if (count($eventCat) > 0){
            foreach($eventCat as $eventCat){
				wp_update_nav_menu_item($menu->term_id, 0, array(
				    'menu-item-title' => $eventCat->name,
				    'menu-item-object-id' => $eventCat->term_id,
				    'menu-item-db-id' => 0,
				    'menu-item-object' => 'category',
				    'menu-item-type' => 'taxonomy',
				    'menu-item-url' => get_category_link($eventCat->term_id),
				    'menu-item-status' => 'publish',)
				);
			}
        }
	}
	//then you set the wanted theme  location
	$locations = get_theme_mod('nav_menu_locations');
	$locations['primary'] = $menu->term_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}
//end



/**
 *	2.0 - Add support for custom logo.
 */
	function gp_themes_custom_logo(){
		$defaults = array(
			'height' => '100',
			'width' => '300',
			'flex-height' => true,
			'flex-width' => true,
			'header-text' => array('site-title', 'site-description')
		); 
		add_theme_support('custom-logo', $defaults);
	}
	

add_action( 'after_setup_theme', 'gp_themes_custom_logo' );

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
function gp_themes_enqueue_scripts() {
	
	/*
	*	Path variables to assets	
	*/
	$_gp_path = get_stylesheet_directory_uri() . '/assets';
	
	/**
	*	5.1 - Styles 
	*/
	
    wp_enqueue_style( 'gp-themes-bootstrap', $_gp_path.'/css/bootstrap.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-themes-animate', $_gp_path.'/css/animate.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-themes-font-awesome', $_gp_path.'/css/font-awesome.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-themes-responsive', $_gp_path.'/css/responsive.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-themes-nexus', $_gp_path.'/css/nexus.css', array(), date('Ymhi'));
	
	wp_enqueue_style( 'gp-themes-custom', $_gp_path.'/css/custom.css', array(), date('Ymhi'));
	
	/**
	*	5.2 - Scripts
	*/ 
	
	wp_enqueue_script( 'gp-themes-jquery', $_gp_path.'/js/jquery.min.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-bootstrap', $_gp_path.'/js/bootstrap.min.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-isotope', $_gp_path.'/js/jquery.isotope.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-slicknav', $_gp_path.'/js/jquery.slicknav.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-visible', $_gp_path.'/js/jquery.visible.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-modernizer', $_gp_path.'/js/modernizr.custom.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-slimbox', $_gp_path.'/js/slimbox2.js', array( 'jquery' ) );
	
	wp_enqueue_script( 'gp-themes-scripts', $_gp_path.'/js/scripts.js', array( 'jquery' ) );
	
}
add_action( 'wp_enqueue_scripts', 'gp_themes_enqueue_scripts' );

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