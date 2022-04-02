<?php

/*
Plugin Name: OxyWind Autocomplete Addon
Description: Adds classes autocomplete suggestions
Author: Marko Krstic
Author URI: https://markokrstic.com/
Version: 0.0.1
License: GNU General Public License v2.0 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'Move Along, Nothing to See Here' );


function tawilwind_autocomlete__scripts_and_styles() {
	wp_enqueue_style( 'tailwind_auto__style', plugin_dir_url( __FILE__ ) . 		'tribute.css');		
	wp_enqueue_script( 'tailwind_auto__js', plugin_dir_url( __FILE__ ) . 		'tribute.js', '', '0.0.9', true );		
	wp_enqueue_script( 'tailwind_auto_trigger__js', plugin_dir_url( __FILE__ ) .'trigger.js', '', '0.0.9', true );		
}

// Load only if Oxygen Builder is running
if ( isset ( $_GET['ct_builder'] ) && 'true' === $_GET['ct_builder'] ) {

	add_action( 'wp_footer', 'tawilwind_autocomlete__scripts_and_styles');
}
