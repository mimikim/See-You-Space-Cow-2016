<?php
function load_posts( $post_type, $category_array = null, $sort_array = null ) {

    if ( !is_null($sort_array) ) {
        $posts_per_page = $sort_array['posts_per_page'];
        $order = $sort_array['order'];
        $orderby = $sort_array['orderby'];
    } else {
        $posts_per_page = -1;
        $order = 'ASC';
        $orderby = 'title';
    }

    $args = array(
        'posts_per_page'   => $posts_per_page,
        'order'            => $order,
        'orderby'          => $orderby,
        'post_type'        => $post_type,
        'post_status'      => 'publish'
    );

    if ( $category_array != null ) {
        if ( $post_type == 'post' ) {
            $args['cat'] = $category_array;
        } else if ( $post_type == 'mk_portfolio' ) {
            $args['tax_query'][] = array(
                'taxonomy'  => 'type',
                'field'     => 'term_id',
                'terms'     => $category_array
            );
        }
    }

    $results = get_posts( $args );
    $total_count = count( $results );
    $end_of_posts_flag = false;
    $count = 0;
    $return_value = null;

    if ( $total_count % 3 != 0 ) {
        $end_of_posts_flag = true;
    }

    foreach( $results as $result ) {
        $thumbnail = get_featured_image( $result->ID, 'full' );

        if($count == 0) {
            $return_value .= '<div class="row">';
        }

        $return_value .= '<div class="col-sm-4 archive-item">
            <a href="' . get_permalink( $result->ID ) . '">
            <div class="image">
                <img src="' . $thumbnail . '" class="img-responsive">
            </div>
            <h3>' . get_the_title( $result->ID ) . '</h3>';

        if ( $post_type == 'post' ) {
            $return_value .= '<div class="archive-text">
                <div>
                    <em>' . get_the_date( 'M j, Y', $result->ID ) . '</em>
                </div>
                Lorem ipsum work details lorem ipsum dolor work details lorem ipsum dolor work details
            </div>';
        }

        $return_value .=  '</a>
            </div>';

        $count++;

        if( ($total_count == 1) && ($end_of_posts_flag == true) ) {
            $return_value .= '</div>';
        } elseif ($count == 3)  {
            $return_value .= '</div>';
            $count = 0;
        }

        $total_count--;
    }
    return $return_value;
}