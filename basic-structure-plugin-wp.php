<?php
/*
Plugin Name: Here plugin name
Description: description to fewer than 140 characters.
Version: 0.1
Author: your name
Author URI: http://yourSite.com
Text Domain: basic-structure-plugin-wp
*/
if(!defined( 'ABSPATH' )){
	echo '-1';
}

define('PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('VERSION', 0.1);

/**
 * Load plugin textdomain.
 */
function basic_structure_plugin_load_textdomain() {
  load_plugin_textdomain( 'wpdocs_textdomain', false, PLUGIN_PATH . '/languages' );
}
add_action( 'init', 'basic_structure_plugin_load_textdomain' );

/**
 * Proper way to enqueue scripts and styles.
 */
function add_scripts_and_styles_in_theme() {
    wp_enqueue_style( 'style-name', PLUGIN_PATH . '/assets/css/style.css' );
    wp_enqueue_script( 'script-name', PLUGIN_PATH . '/assets/js/main.js', array(), VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles_in_theme' );
