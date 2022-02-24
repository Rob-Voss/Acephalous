<?php
/***
Plugin Name:  Acephalous WordPress
Plugin URI:
Description:  We'll remove the head of WordPress
Version:      0.1
Author:       Rob Voss <rob.voss@digerati.io
Author URI:   https://github.com/Rob-Voss
License:      GPL3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:  acephalous-wordpress
@package acephalous-wordpress

 */

// Abort if this file is called directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main class file
 */
require_once plugin_dir_path( __FILE__ ) . '/src/acephalous-wordpress.php';

$acephalouswp = \AcephalousWP\Acephalous_WordPress::get_instance();