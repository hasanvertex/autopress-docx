<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class APD_Admin {

    /**
     * Constructor
     */
    public function __construct() {
        add_action(
            'admin_menu',
            array( $this, 'register_menu' )
        );
    }

    /**
     * Register Admin Menu
     */
    public function register_menu() {

        add_menu_page(
            'AutoPress DOCX',
            'AutoPress DOCX',
            'edit_posts',
            'autopress-docx',
            array( $this, 'render_page' ),
            'dashicons-media-document',
            25
        );
    }

    /**
     * Render Admin Page
     */
    public function render_page() {

        require APD_PLUGIN_PATH . 'templates/upload-page.php';

    }
}