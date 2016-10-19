<?php
function mk_contact_email() {
    check_ajax_referer( 'contact-email-form', 'nonce' );

    set_query_var( 'email_message', $_REQUEST['email_message'] );
    get_template_part('partials/email-template');

    wp_die();
}