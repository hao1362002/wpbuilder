<?php
/**
 * Plugin Name: WPBuilder
 * Plugin URI: https://wpbuilder.net
 * Description: Fully integrated plugin with WP Ultimo - auto domain mapping, SSL, Cloudflare, backup, GDrive, and more.
 * Version: 1.1.0
 * Author: WPBuilder Team
 * Text Domain: wpbuilder
 */

if (!defined('ABSPATH')) exit;

define('WPB_PATH', plugin_dir_path(__FILE__));
define('WPB_URL',  plugin_dir_url(__FILE__));

// Load includes
foreach (glob(WPB_PATH . 'includes/*.php') as $file) {
    require_once $file;
}
