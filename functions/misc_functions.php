<?php

// return featured image url
function get_featured_image( $id ) {

    if (has_post_thumbnail( $id ) ) {

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );

        return $image[0];

    } else {

        return false;
    }
}