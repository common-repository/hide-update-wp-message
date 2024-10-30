<?php
/*
Plugin Name: Hide Update WP Message
Plugin URI: https://wordpress.org/plugins/hide-update-wp-message/
Description: This plugin will hide update message of wordpress from dashboard
Author: Asif Ali
Author URI: http://asifalimca.wordpress.com
Version: 1.0.0
License: GPLv2
*/

add_action('admin_menu','hidewpupdate');
function hidewpupdate() {
	remove_action( 'admin_notices', 'update_nag', 3 );
}