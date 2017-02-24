<?php

//deny external access
defined('ABSPATH') or die();

add_filter('parse_query', 'menuconnect_query_parser');

function menuconnect_install() {
	global $wpdb;

	$the_page_title = 'Order Online';
	$the_page_name  = 'order-online';

	// the menu entry...
	delete_option('menuconnect_page_title');
	add_option('menuconnect_page_title', $the_page_title, '', 'yes');
	// the slug...
	delete_option('menuconnect_page_name');
	add_option('menuconnect_page_name', $the_page_name, '', 'yes');
	// the id...
	delete_option('menuconnect_page_id');
	add_option('menuconnect_page_id', '0', '', 'yes');

	$the_page = get_page_by_title($the_page_title);

	if (!$the_page) {

		// Create post object
		$_p = array();
		$_p['post_title']     = $the_page_title;
		$_p['post_content']   = '';
		$_p['post_status']    = 'publish';
		$_p['post_type']      = 'page';
		$_p['comment_status'] = 'closed';
		$_p['ping_status']    = 'closed';
		$_p['post_category']  = array(1); // the default 'Uncatrgorised'

		// Insert the post into the database
		$the_page_id = wp_insert_post($_p);

	}
	else {

		$the_page_id = $the_page->ID;
		$the_page->post_status = 'publish';
		$the_page_id = wp_update_post($the_page);

	}

	delete_option('menuconnect_page_id');
	add_option('menuconnect_page_id', $the_page_id);

}

function menuconnect_remove() {
	global $wpdb;

	$the_page_title = get_option('menuconnect_page_title');
	$the_page_name  = get_option('menuconnect_page_name');

	//  the id of our page...
	$the_page_id = get_option('menuconnect_page_id');
	if($the_page_id) {

		wp_delete_post($the_page_id); // this will trash, not delete

	}

	delete_option('menuconnect_page_title');
	delete_option('menuconnect_page_name');
	delete_option('menuconnect_page_id');

}

function menuconnect_query_parser($q) {
	$the_page_name = get_option('menuconnect_page_name');
	$the_page_id   = get_option('menuconnect_page_id');

	$qv = $q->query_vars;

	if (!$q->did_permalink AND (isset($q->query_vars['page_id'])) AND (intval($q->query_vars['page_id']) == $the_page_id)) {

		$q->set('menuconnect_page_is_called', TRUE);

	}
	elseif (isset($q->query_vars['pagename']) AND (($q->query_vars['pagename'] == $the_page_name) OR ($_pos_found = strpos($q->query_vars['pagename'],$the_page_name.'/') === 0))) {

		$q->set('menuconnect_page_is_called', TRUE);

	}
	else {

		$q->set('menuconnect_page_is_called', FALSE);

	}

	if ($q->get('menuconnect_page_is_called')) {
		add_filter('the_content', 'menuconnect_content');
	}
}

function menuconnect_content() {
	$the_path = str_replace('\\', '/', plugin_dir_path(__FILE__));

	$sdk_file = $the_path.'dcom-sdk.html';
	$mc_file  = $the_path.'dcom-menuconnect.html';

	$options       = get_option('menuconnect_settings');
	$the_file      = ($options['menuconnect_use_config']) ? $mc_file : $sdk_file;
	$merchant_type = ($options['menuconnect_is_laundry']) ? 'laundry' : 'normal';
	$laundry_attr  = ($merchant_type === 'laundry') ? ' data-laundry="1"' : '';

	//update params with wp options
	$the_file = file_get_contents($the_file);
	$the_file = str_replace('{{DCOM_MERCHANT_ID}}', $options['menuconnect_merchant_id'], $the_file);
	$the_file = str_replace('{{DCOM_MERCHANT_TYPE}}', $merchant_type, $the_file);
	$the_file = str_replace('{{DCOM_MERCHANT_IS_LAUNDRY}}', $laundry_attr, $the_file);

	return $the_file;
}

?>