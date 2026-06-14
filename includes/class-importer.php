<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class APD_Importer {

    public function __construct() {
        add_action( 'admin_init', array( $this, 'handle_import' ) );
    }

    public function handle_import() {

        if ( ! isset( $_POST['apd_import_submit'] ) ) {
            return;
        }

        if (
            ! isset( $_POST['apd_nonce'] ) ||
            ! wp_verify_nonce( $_POST['apd_nonce'], 'apd_import_docx' )
        ) {
            wp_die( 'Security check failed.' );
        }

        if ( ! current_user_can( 'edit_posts' ) ) {
            wp_die( 'You do not have permission to perform this action.' );
        }

        if ( empty( $_FILES['apd_docx']['name'] ) ) {

            add_settings_error(
                'apd_messages',
                'apd_no_file',
                'Please select a DOCX file.',
                'error'
            );

            return;
        }

        $extension = strtolower(
            pathinfo(
                $_FILES['apd_docx']['name'],
                PATHINFO_EXTENSION
            )
        );

        if ( 'docx' !== $extension ) {

            add_settings_error(
                'apd_messages',
                'apd_invalid_file',
                'Only DOCX files are allowed.',
                'error'
            );

            return;
        }

        add_settings_error(
            'apd_messages',
            'apd_success',
            'DOCX file validation successful. Import engine is ready.',
            'success'
        );
    }
}