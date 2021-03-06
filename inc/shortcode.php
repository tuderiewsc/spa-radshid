<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action('init', function(){
	add_shortcode('spa_form' , 'rad_show_spa_form');
	add_shortcode('home_top_banner' , 'rad_show_top_banner');
	add_shortcode('home_top_slider' , 'rad_show_top_slider');
	add_shortcode('home_agency_carousel' , 'rad_show_agency_carousel');
	add_shortcode('home_random_posts' , 'rad_show_home_random_posts');
	add_shortcode('home_top_links' , 'rad_show_home_top_links');
	add_shortcode('affilate_separator' , 'affilate_separator_section');
	add_shortcode('sipaad_separator' , 'sipaad_separator_section');
	add_shortcode('affilate_dash' , 'affilate_dash_page');
	add_shortcode('mellat' , 'mellat_page');
	add_shortcode('product_share_btns' , 'product_share_buttons');
});
function mellat_page($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/mellat_test.php');
}
function rad_show_spa_form($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/spa_form.php');
}
function rad_show_top_banner($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/top_banner.php');
}
function rad_show_top_slider($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/top_slider.php');
}
function rad_show_agency_carousel($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/agency_carousel.php');
}
function rad_show_home_random_posts($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/random_posts.php');
}
function rad_show_home_top_links($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/top_links.php');
}
function affilate_separator_section($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/affilate_separator_section.php');
}
function sipaad_separator_section($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/sipaad_separator_section.php');
}
function affilate_dash_page($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/affilate_dash_page.php');
}
function product_share_buttons($atts, $content = null){
	include(plugin_dir_path( __FILE__ ).'../site/views/product_share_buttons.php');
}




