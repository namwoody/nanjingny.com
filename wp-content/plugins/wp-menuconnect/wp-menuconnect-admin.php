<?php

//deny external access
defined('ABSPATH') or die();

add_action('admin_menu', 'menuconnect_add_admin_menu');
add_action('admin_init', 'menuconnect_settings_init');


function menuconnect_add_admin_menu() { 
	add_options_page('MenuConnect', 'MenuConnect', 'manage_options', 'menuconnect', 'menuconnect_options_page');
}

function menuconnect_settings_init() { 
	register_setting('pluginPage', 'menuconnect_settings');

	add_settings_section(
		'menuconnect_pluginPage_section', 
		__('Configure your online ordering page', 'wordpress'), 
		'menuconnect_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'menuconnect_merchant_id', 
		__('delivery.com merchant id', 'wordpress'), 
		'menuconnect_merchant_id_render', 
		'pluginPage', 
		'menuconnect_pluginPage_section' 
	);

	add_settings_field( 
		'menuconnect_is_laundry', 
		__('This is a laundry merchant', 'wordpress'), 
		'menuconnect_is_laundry_render', 
		'pluginPage', 
		'menuconnect_pluginPage_section' 
	);

	add_settings_field( 
		'menuconnect_use_config', 
		__('Use merchant config', 'wordpress'), 
		'menuconnect_use_config_render', 
		'pluginPage', 
		'menuconnect_pluginPage_section' 
	);
}

function menuconnect_merchant_id_render() { 
	$options = get_option('menuconnect_settings');
	?>
	<input type='text' name='menuconnect_settings[menuconnect_merchant_id]' value='<?php echo $options['menuconnect_merchant_id']; ?>'>
	<?php
}

function menuconnect_is_laundry_render() { 
	$options = get_option('menuconnect_settings');
	?>
	<input type='checkbox' name='menuconnect_settings[menuconnect_is_laundry]' <?php checked($options['menuconnect_is_laundry'], 1); ?> value='1'>
	<?php
}

function menuconnect_use_config_render() { 
	$options = get_option('menuconnect_settings');

	?>
	<input type='checkbox' name='menuconnect_settings[menuconnect_use_config]' <?php checked($options['menuconnect_use_config'], 1); ?> value='1'>
	<?php
}

function menuconnect_settings_section_callback() { 
	echo __('Merchant information', 'wordpress');
}

function menuconnect_options_page() { 
	?>
	<form action='options.php' method='post'>
		
		<h2>MenuConnect</h2>
		
		<?php
		settings_fields('pluginPage');
		do_settings_sections('pluginPage');
		submit_button();
		?>
		
	</form>
	<?php
}

?>