<?php
/**
 * Plugin Name: SHOPEO Plugin Scaffold
 * Plugin URI: https://wordpress.org/plugins/shopeo-plugin-scaffold
 * Description:
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://shopeo.cn
 * License: GPL3+
 * Text Domain: shopeo-plugin-scaffold
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

