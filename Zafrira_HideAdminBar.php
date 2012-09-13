<?php
/*
Plugin Name: Hide the Admin Bar
Plugin URI: https://zafrira.net/en/tools/wordpress-plugins/hide-admin-bar/
Description: Hide the admin bar from your WordPress
Version: 1.0.1
Author: zafrira
Author URI: https://zafrira.net
*/

if(!is_admin()){
	add_filter( 'show_admin_bar', '__return_false' );
}