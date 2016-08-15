<?php

// return featured image url
function get_featured_image( $id, $size = 'full' ) {

    if (has_post_thumbnail( $id ) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), $size );
        return $image[0];
    } else {
        return false;
    }
}

// add acf option field
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