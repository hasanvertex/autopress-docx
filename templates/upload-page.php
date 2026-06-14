<div class="wrap">

    <h1>AutoPress DOCX</h1>

    <?php settings_errors( 'apd_messages' ); ?>

    <p>
        Import Microsoft Word (.docx) files into WordPress.
    </p>

    <form method="post" enctype="multipart/form-data">

        <?php wp_nonce_field( 'apd_import_docx', 'apd_nonce' ); ?>

        <table class="form-table">

            <tr>

                <th scope="row">
                    Select DOCX File
                </th>

                <td>

                    <input
                        type="file"
                        name="apd_docx"
                        accept=".docx"
                        required
                    >

                </td>

            </tr>

            <tr>

                <th scope="row">
                    Post Status
                </th>

                <td>

                    <select name="apd_status">

                        <option value="draft">
                            Draft
                        </option>

                        <option value="publish">
                            Publish
                        </option>

                    </select>

                </td>

            </tr>

        </table>

        <?php
        submit_button(
            'Import DOCX',
            'primary',
            'apd_import_submit'
        );
        ?>

    </form>

</div>