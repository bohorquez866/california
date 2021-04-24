<?php
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'    => 'Configuración General',
      'menu_title'    => 'Configuraciones',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false,
      'position'      => '2.1',
      'icon_url'      => 'dashicons-admin-settings',
    ));
}
function register_my_menus() {
    register_nav_menus(
      array(
		'header-menu' => __( 'Header Menu' ), 
        'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' ); 

// add theme suppor post thumbnails
add_theme_support( 'post-thumbnails' );

// Support Titulos
add_theme_support( 'title-tag' );

// Remover Editor
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

function scripts(){
  // Slick Css
  // wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri() . '/src/js/swiper/swiper.css');
  // wp_enqueue_style('swiper-css');
  wp_register_style('style',get_template_directory_uri() . '/dist/scss/styles.css', [], 1, 'all'); 
  wp_enqueue_style('style');
  
}

add_action('wp_enqueue_scripts', 'scripts');
add_action('get_header', 'my_filter_head');

 // Swipper Js
// function add_this_script_footer(){
//   wp_register_script('swipper-js', get_template_directory_uri() . '/src/js/swiper/swiper.js');
//   wp_enqueue_script('swipper-js');
//   wp_register_script('waypoint-js', get_template_directory_uri() . '/src/js/waypoints.min.js');
//   wp_enqueue_script('waypoint-js');
//   wp_register_script('app', get_template_directory_uri() . '/dist/app.js', 1, true);
//   wp_enqueue_script('app');
// }
// add_action('wp_footer', 'add_this_script_footer');

function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

load_theme_textdomain('california', get_template_directory() . '/languages');

add_filter( 'wpcf7_autop_or_not', '__return_false' );

/*-----------------------------------
Select Services
-----------------------------------*/
function add_listServices_to_CF7 ( $tag, $unused ) {
  if ( $tag['name'] != 'list_services' ){
        return $tag;
  }
  $args = get_posts(array(
      'post_type' => 'service',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'update_post_meta_cache' => false,
      'update_post_term_cache' => false,
  ));

  foreach ( $args as & $arg ) {
      $tag['raw_values'][] = $arg->post_title;
      $tag['values'][] = $arg->post_title;
  }
  return $tag;
}
add_filter( 'wpcf7_form_tag', 'add_listServices_to_CF7', 10, 2);

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}