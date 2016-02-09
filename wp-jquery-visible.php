<?php
/**
 * Plugin Name: WP jQuery Visible
 * Plugin URI: https://fatpony.me/plugins/wp-jquery-visible/
 * Description: Enqueues the jQuery Visible plugin script.
 * Version: 1.0.0
 * Author: Erica Franz
 * Author URI: https://fatpony.me/
 * License: GPL2
 */

 defined( 'ABSPATH' ) or die( 'No mootching!' );

// Register & Enqueue Scripts
function wpjqueryv_enqueue_scripts() {
    
    $path = plugin_dir_url( __FILE__ );
    
    // Scripts   
	wp_register_script( 'wp-jquery-visible', $path . 'assets/js/jquery.visible.min.js', 'jquery', '1.0.0', true );
	wp_enqueue_script( 'wp-jquery-visible' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'wpjqueryv_enqueue_scripts' );