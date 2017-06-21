<?php

/* ----------
Core 
---------- */

//include_once 'includes/custom_post_types.php';
//include_once 'includes/custom_taxonomies.php';
include_once 'includes/lib/Mobile_Detect.php';
include_once 'includes/get_loop.php';


/* ----------
Views 
---------- */

include_once 'views/view_example.php';


class Site {

	function __construct() {


		show_admin_bar(false);
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );

		add_action( 'init', array( $this, 'initAction' ) );
		add_action( 'wp_footer', 'deregister_scripts' );
		add_action( 'admin_menu', 'emersonthis_custom_menu_page_removing' );
		//add_action( 'wp_head', 'show_me_the_template_butthead_hehe' );

		remove_action( 'wp_head', 'rest_output_link_wp_head');
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
        remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wp_generator');

		register_nav_menu('primary-nav', __('Primary Nav', 'yoursite'));

		if( function_exists('acf_add_options_page') ) {
	        acf_add_options_page();
	    }

	    $this->detect = new Mobile_Detect;

	}

	function initAction() {
		//custom_post_types();
		//custom_taxonomies();
		//$this->add_to_template();
	}


	function add_to_template() {

		add_action('loop_example_output', 'loop_example');
		add_filter('my_viewloop_filter', 'my_view_name');

	}

	$this->detect = new Mobile_Detect;

}


new Site();


function loop_example() {
	
	$args = array ('post_type' => 'post', 'posts_per_page' => -1, 'order_by' => 'date');

	$loop = new get_loop( $args, 'my_view');
  	$loop->loop_block_output();

}


function emersonthis_custom_menu_page_removing() {
 
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'tools.php' );                  //Tools

  
}

// function show_me_the_template_butthead_hehe() {
//   global $template, $current_user, $wp_admin_bar;
  
//   if ( !is_user_logged_in() && $current_user->ID != '1' ) 
//     return;
//   if ( is_admin_bar_showing() )
//     $wp_admin_bar->add_menu( array(
//       'parent' => false,
//       'id' => 'template',
//       'title' => $template,
//       'href' => '#'
//   ));
//   else
//     print_r( $template );
// }








