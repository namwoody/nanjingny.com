<?php

/*
Plugin Name: MenuConnect
Plugin URI:  https://menuconnect.delivery.com/sdk/docs/index.html
Description: Embed delivery.com's MenuConnect app in your WordPress site
Version:     1.0
Author:      delivery.com
Author URI:  https://www.delivery.com
*/

//deny external access
defined('ABSPATH') or die();

function menuconnect_initialize() {
	$the_path = str_replace('\\', '/', plugin_dir_path(__FILE__));

	include_once($the_path.'wp-menuconnect-page.php');
	include_once($the_path.'wp-menuconnect-admin.php');

	/* plugin is activated */
	register_activation_hook(__FILE__, 'menuconnect_install'); 

	/* plugin is deactived */
	register_deactivation_hook(__FILE__, 'menuconnect_remove');
}

menuconnect_initialize();

?>