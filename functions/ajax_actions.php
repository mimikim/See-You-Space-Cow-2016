<?php
// contact email
add_action( 'wp_ajax_mk_contact_email', 'mk_contact_email' );
add_action( 'wp_ajax_nopriv_mk_contact_email', 'mk_contact_email' );

// portfolio filtering
add_action( 'wp_ajax_mk_portfolio_filtering', 'mk_portfolio_filtering' );
add_action( 'wp_ajax_nopriv_mk_portfolio_filtering', 'mk_portfolio_filtering' );

