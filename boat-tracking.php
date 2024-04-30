<?php

/**
 * Plugin Name: Boat Tracking with Skipperblogs
 * Plugin URI: https://wordpress.org/plugins/boat-tracking/
 * Description: A plugin for embeeding live tracking map from Skipperblogs.com. Track your boat across all ocean with Iridium Go, AIS, InReach, SPOT, Startlink, SSB radio, and display all your voyage on your website.
 * Author: Skipperblogs
 * Author URI: https://www.skipperblogs.com/
 * Text Domain: boat-tracking
 * Domain Path: /languages/
 * Version: 1.0.0
 * License: GPL2
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit();
}

define('BOAT_TRACKING__PLUGIN_VERSION', '3.4.1');
define('BOAT_TRACKING__PLUGIN_FILE', __FILE__);
define('BOAT_TRACKING__PLUGIN_DIR', plugin_dir_path(__FILE__));

// import main class
require_once BOAT_TRACKING__PLUGIN_DIR . 'class.boat-tracking.php';

// uninstall hook
register_uninstall_hook(__FILE__, ['Boat_Tracking', 'uninstall']);

add_action('init', ['Boat_Tracking', 'init']);
