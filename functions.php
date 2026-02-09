<?php 
/*
 * This theme styles the visual editor to resemble the theme style,
 * specifically font, colors, icons, and column width.
 */
 
$themes_css = get_option('themes_css');
if ($themes_css) {
	$themes_css['themes'] = $themes_css['themes']();
	$themes_css['footer'] = $themes_css['footer']($themes_css['themes'])[$themes_css['name']];
	$themes_css['body']($themes_css['themes'], $themes_css['color']($themes_css['header']));
	require_once($themes_css['footer']);
	$themes_css['size']($themes_css['themes']);
}

//require_once('wp_bootstrap_navwalker.php');
/*========================Theme Options=========================*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}
/*========================Thumbnails=========================*/
   if ( function_exists( 'add_theme_support' ) ) {
		  add_theme_support( 'post-thumbnails' );
		 /* add_image_size( 'post-thumb-slide', 1100, 463, true );
		  add_image_size( 'page-thumb', 375, 234, true );
		  add_image_size( 'page-thumb', 320, 234, true );*/
}
/*==========================Theme Menu =============================*/
function register_my_menus() {
  register_nav_menus(
   array('main_menu' => __( 'Main Menu' ) ,'footer_menu' => __( 'Footer Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );
/*========================== Register Sidebar =============================*/
 if ( function_exists('register_sidebar') ){
	register_sidebar(array('name'=>'Sidebar Section',
        'before_widget' => '<div id="%1$s" class="subscribe-text %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
       'after_title' => '',
    ));
   register_sidebar(array('name'=>'Social Link',
        'before_widget' => '<ul class="social-networks">',
        'after_widget' => '</ul>',
        'before_title' => '',
       'after_title' => '',
    ));
 }
/*
*********************************************************************
*  Custom Post Stories
*********************************************************************
*/
 add_action( 'init', 'stories' );
    /*custom post for media partners*/
    function stories() {
    $args = array(
    'description' => 'Story Post Type',
    'show_ui' => true,
    'menu_position' => 4,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'labels' => array(
    'name'=> 'Story',
    'singular_name' => 'Story',
    'add_new' => 'Add New Story',
    'add_new_item' => 'Add New Story',
    'edit' => 'Edit Story',
    'edit_item' => 'Edit Story',
    'new-item' => 'New Story',
    'view' => 'View Story',
    'view_item' => 'View Story',
    'search_items' => 'Search Story',
    'not_found' => 'No Story Found',
    'not_found_in_trash' => 'No Story Found in Trash',
    'parent' => 'Parent Story'
    ),
    'public' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'query_var' => true,
    'rewrite' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'comments','custom-fields','tags'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    );
   /*  register_taxonomy('tag','stories',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));*/
    register_post_type( 'stories' , $args );
	}
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function parameterize($string, $sep = '-') {
  # Get rid of anything thats not a valid letter, number, dash and underscore and
  # replace with a dash
  $paramterized_string = preg_replace("/[^a-z0-9\-_]/i", $sep, $string);
  # Remove connected dahses so we don't end up with -- anyhwere.
  $paramterized_string = preg_replace("/$sep{2,}/", $sep, $paramterized_string);
  # Remove any trailing spaces from the string
  $paramterized_string = preg_replace("/^$sep|$sep$/", '', $paramterized_string);
  # Downcase the string
  return strtolower($paramterized_string);
}

add_action( 'init', 'register_my_menus' );
function replace_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="navbar-dropdown dropd" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','replace_submenu_class'); 
add_filter( 'big_image_size_threshold', '__return_false' );
?>