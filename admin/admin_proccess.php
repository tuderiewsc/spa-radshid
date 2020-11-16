<?php

add_action('admin_menu', 'radtools_creat_admin_menu');
function radtools_creat_admin_menu(){
	global $radtools_page_hook;
	$radtools_page_hook = add_menu_page(
		__('Rad Tools', 'radshid_lan'),
		__('Rad Tools', 'radshid_lan'),
		'manage_options',
		'rad_tools',
		function(){include(RAD_ADMIN_VIEW . 'about.php');}
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