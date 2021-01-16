<?php
/**
 * Plugin Name: Radshid Customization
 * Plugin URI: https://radshid.com/
 * Description: Spa For Radshid Site.
 * Version: 1.4
 * Author: Outsider
 * Author URI: https://radshid.com/
 * Text Domain: radshid_lan
 * Domain Path: /languages
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action('plugins_loaded', function(){
	load_plugin_textdomain('radshid_lan', false, basename(plugin_dir_path(__FILE__)) . '/languages/');
});




//define('RAD_INC', plugin_dir_path(__FILE__) . 'inc/');
define('RAD_ADMIN', plugin_dir_path(__FILE__) . 'admin/');
define('RAD_ADMIN_VIEW', plugin_dir_path(__FILE__) . 'admin/view/');
define('RAD_INCS', plugin_dir_path(__FILE__) . 'inc/');
define('RAD_CSS', plugin_dir_url(__FILE__) . 'css/');
define('RAD_JS', plugin_dir_url(__FILE__) . 'js/');
define('RAD_ASSETS', plugin_dir_url(__FILE__) . 'assets/');

// load css&js
add_action( 'wp_enqueue_scripts', function(){
	// scripts
	wp_enqueue_script('popper', RAD_JS.'popper.min.js' , array('jquery', 'media-upload'));
	wp_enqueue_script('bootstrap', RAD_JS.'bootstrap.min.js');
	wp_enqueue_script('owlCarousel', RAD_JS.'owl.carousel.min.js');
	wp_enqueue_script('wow', RAD_JS.'wow.min.js');
	wp_enqueue_script('sweetAlert', RAD_JS.'sweetalert2.all.min.js');
	wp_enqueue_script('myScripts', RAD_JS.'scripts.js' , '1.3');
	wp_localize_script( 'myScripts', 'RadAjax', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'security' => wp_create_nonce( '82ybuh2nuwbex887' )
	));
	wp_enqueue_media();
	// styles
	wp_enqueue_style( 'owl_carousel', RAD_CSS . 'owl.carousel.min.css');
	wp_enqueue_style( 'owl_carousel_theme', RAD_CSS . 'owl.theme.default.min.css');
	wp_enqueue_style( 'bootstrap', RAD_CSS . 'bootstrap.min.css');
	wp_enqueue_style( 'animate_css', RAD_CSS . 'animate.min.css');
	wp_enqueue_style( 'mystyles', RAD_CSS . 'rad-styles.css' , '1.3');
});
// load css&js


if(is_admin()){
	require(RAD_ADMIN . 'admin_proccess.php');
	require(RAD_ADMIN . 'ajax_requests.php');
}
// Short codes
require (RAD_INCS . 'shortcode.php');



register_activation_hook(__FILE__, function () {
	register_uninstall_hook(__FILE__, function (){
		delete_option('RADtools_settings_options');
	});
});


