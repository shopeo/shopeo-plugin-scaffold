<?php
/**
 * Plugin Name: SHOPEO WP Core
 * Plugin URI: https://wordpress.org/plugins/shopeo-wp-core
 * Description: The easy way to customize your WordPress <code>wp-login.php</code> screen!
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://shopeo.cn
 * License: GPL3+
 * Text Domain: shopeo-wp-core
 * Domain Path: /languages
 * Requires at least: 5.9
 * Requires PHP: 5.6
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
	require_once 'vendor/autoload.php';
}

