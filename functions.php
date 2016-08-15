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