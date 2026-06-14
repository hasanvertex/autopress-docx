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

define( 'APD_VERSION', '0.1.0-alpha' );
define( 'APD_PLUGIN_FILE', __FILE__ );
define( 'APD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'APD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

class AutoPressDOCX {

    public function __construct() {

        add_action(
            'admin_menu',
            array( $this, 'register_admin_menu' )
        );
    }

    public function register_admin_menu() {

        add_menu_page(
            'AutoPress DOCX',
            'AutoPress DOCX',
            'edit_posts',
            'autopress-docx',
            array( $this, 'admin_page' ),
            'dashicons-media-document',
            25
        );
    }

    public function admin_page() {

        ?>
        <div class="wrap">

            <h1>AutoPress DOCX</h1>

            <p>
                Welcome to AutoPress DOCX Alpha.
            </p>

            <p>
                DOCX Import Engine development has started.
            </p>

        </div>
        <?php
    }
}

new AutoPressDOCX();
