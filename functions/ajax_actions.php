<?php
// contact email
add_action( 'wp_ajax_mk_contact_email', 'mk_contact_email' );
add_action( 'wp_ajax_nopriv_mk_contact_email', 'mk_contact_email' );

// portfolio filtering
add_action( 'wp_ajax_mk_category_filtering', 'mk_category_filtering' );
add_action( 'wp_ajax_nopriv_mk_category_filtering', 'mk_category_filtering' );

