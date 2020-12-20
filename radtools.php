<?php
/**
 * Plugin Name: Radshid Customization
 * Plugin URI: https://radshid.com/
 * Description: Spa For Radshid Site.
 * Version: 1.1.0
 * Author: Outsider
 * Author URI: https://radshid.com/
 * Text Domain: radshid_lan
 * Domain Path: /languages
 */

defined('ABSPATH') || exit;

add_action('plugins_loaded', function(){
	load_plugin_textdomain('radshid_lan', false, basename(plugin_dir_path(__FILE__)) . '/languages/');
});


//define('RAD_INC', plugin_dir_path(__FILE__) . 'inc/');
define('RAD_ADMIN', plugin_dir_path(__FILE__) . 'admin/');
define('RAD_ADMIN_VIEW', plugin_dir_path(__FILE__) . 'admin/view/');
define('RAD_CSS', plugin_dir_url(__FILE__) . 'css/');
define('RAD_JS', plugin_dir_url(__FILE__) . 'js/');
define('RAD_ASSETS', plugin_dir_url(__FILE__) . 'assets/');

// load css&js
add_action( 'wp_enqueue_scripts', function(){
	// scripts
	wp_enqueue_script('popper', RAD_JS.'popper.min.js' , array('jquery', 'media-upload'));
	wp_enqueue_script('bootstrap', RAD_JS.'bootstrap.min.js');
	wp_enqueue_script('owlcarousel', RAD_JS.'owl.carousel.min.js');
	wp_enqueue_script('wow', RAD_JS.'wow.min.js');
	wp_enqueue_script('myscripts', RAD_JS.'scripts.js' , '1.0.0');
	wp_localize_script( 'myscripts', 'RadAjax', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'security' => wp_create_nonce( '(H+MbPeShVmYq3t6' )
	));
	wp_enqueue_media();
	// styles
	wp_enqueue_style( 'owl_carousel', RAD_CSS . 'owl.carousel.min.css');
	wp_enqueue_style( 'owl_carousel_theme', RAD_CSS . 'owl.theme.default.min.css');
	wp_enqueue_style( 'bootstrap', RAD_CSS . 'bootstrap.min.css');
	wp_enqueue_style( 'animate_css', RAD_CSS . 'animate.min.css');
	wp_enqueue_style( 'mystyles', RAD_CSS . 'rad-styles.css' , '1.0.0');
});
// load css&js



//register_activation_hook(__FILE__, 'hmds_activation_func');
//function hmds_activation_func(){
//}
//
//register_uninstall_hook(__FILE__, 'hmds_uninstall_func');
//function hmds_uninstall_func(){
//}


if(is_admin()){
	require(RAD_ADMIN . 'admin_proccess.php');
	//require(HMDS_ADMIN . 'ajax_requests.php');
}


// Shortcodes
add_action('init', function(){
	add_shortcode('spa_form' , 'rad_show_spa_form');
	add_shortcode('home_top_banner' , 'rad_show_top_banner');
	add_shortcode('home_agency_carousel' , 'rad_show_agency_carousel');
	add_shortcode('home_random_posts' , 'rad_show_home_random_posts');
	add_shortcode('home_top_links' , 'rad_show_home_top_links');
	add_shortcode('affilate_dash' , 'affilate_dash_page');
});
function rad_show_spa_form($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'site/views/spa_form.php');
}
function rad_show_top_banner($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'site/views/top_banner.php');
}
function rad_show_agency_carousel($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'site/views/agency_carousel.php');
}
function rad_show_home_random_posts($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'site/views/random_posts.php');
}
function rad_show_home_top_links($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'site/views/top_links.php');
}
function affilate_dash_page($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'site/views/affilate_dashboard_page.php');
}
// Shortcodes
