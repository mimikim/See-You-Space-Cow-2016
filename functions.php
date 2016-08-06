<?php
// default theme supports
add_theme_support('post-thumbnails');
//show_admin_bar( false );

// combine all function files
function mk_combine_functions() {
    $functions = glob( get_theme_root() . '/' . get_template() . '/functions/*.php');

    foreach ( $functions as $file ) {
        include_once( $file );
    }
}
add_action('after_setup_theme', 'mk_combine_functions');


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();
}


function register_menu() {
    register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_menu' );

function mk_remove_from_admin() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'mk_remove_from_admin' );