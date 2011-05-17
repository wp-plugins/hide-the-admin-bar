<?php
/*
Plugin Name: Hide the Admin Bar
Plugin URI: http://zafrira.net/services/wordpress-plugins/hide-admin-bar/
Description: Hide the admin bar from your WordPress
Version: 1.0.0
Author: Zafrira
Author URI: http://zafrira.net
*/

if(!is_admin()){
	add_filter( 'show_admin_bar', '__return_false' );
}