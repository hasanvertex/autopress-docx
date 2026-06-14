<?php
/**
 * Plugin Name: AutoPress DOCX
 * Plugin URI: https://github.com/hasanvertex/autopress-docx
 * Description: Turn Microsoft Word documents into fully formatted WordPress posts in one click.
 * Version: 0.1.0-alpha
 * Author: Hasan Ahmed
 * Author URI: https://github.com/hasanvertex
 * License: GPL-2.0
 * Text Domain: autopress-docx
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Plugin Constants
 */
define( 'APD_VERSION', '0.1.0-alpha' );
define( 'APD_PLUGIN_FILE', __FILE__ );
define( 'APD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'APD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Load Admin Class
 */
require_once APD_PLUGIN_PATH . 'includes/class-admin.php';

/**
 * Initialize Plugin
 */
function apd_init() {
    new APD_Admin();
}

add_action( 'plugins_loaded', 'apd_init' );