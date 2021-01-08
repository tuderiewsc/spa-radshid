<?php

add_action('admin_menu', 'radtools_creat_admin_menu');
function radtools_creat_admin_menu(){
		global $radtools_page_hook;
		$radtools_page_hook = add_menu_page(
			__('Radshid Tools', 'radshid_lan'),
			__('Radshid Tools', 'radshid_lan'),
			'edit_posts',
			'rad_tools',
			function(){include(RAD_ADMIN_VIEW . 'settings.php');},
			'dashicons-location' // plugin_dir_url( __FILE__ ) . '/../../assets/images/icons_images/car.png',
		);

		add_submenu_page(
			'rad_tools',
			__('About', 'radshid_lan'),
			__('About', 'radshid_lan'),
			'manage_options',
			'rad_tools_about',
			function(){include(RAD_ADMIN_VIEW . 'about.php');}
		);
}


/* Options */
add_action("admin_init", function(){
	add_settings_section('RADtools_settings_options', __('RADtools Settings', 'radshid_lan'), null, 'RADtools_settings');

	add_settings_field('RADtools_setting_header1', __('User Panel Settings', 'radshid_lan'), 'RADtools_setting_header1_callback'
		, 'RADtools_settings', 'RADtools_settings_options');
	add_settings_field('RADtools_setting_posts_cat', __('Random Posts Category', 'radshid_lan'), 'RADtools_setting_posts_cat_callback'
		, 'RADtools_settings', 'RADtools_settings_options');
/////////////////////////////////

	register_setting('RADtools_settings_options', 'RADtools_random_posts_cat', 'sanitize_text_field');
});


function RADtools_setting_header1_callback() {
	echo '<div class="clearfix"></div><br>';
}
function RADtools_setting_posts_cat_callback(){
	echo '<input class="ltr left-align" type="text" name="RADtools_random_posts_cat" id="RADtools_random_posts_cat"
	value="' . get_option('RADtools_random_posts_cat','[16,322]') . '"
	 style="max-width: 100%;min-width: 400px" required/>';
}







