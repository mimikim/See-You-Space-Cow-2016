<?php
function load_posts( $post_type, $category_array = null ) {

    $args = array(
        'posts_per_page'   => -1,
        'orderby'          => 'title',
        'order'            => 'ASC',
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
        $thumbnail = get_featured_image( $result->ID );

        if($count == 0) {
            $return_value .= '<div class="row">';
        }

        $return_value .= '<div class="col-sm-4 portfolio-item">
            <a href="' . get_permalink( $result->ID ) . '">
                <div class="image">
                    <img src="' . $thumbnail . '" class="img-responsive">
                </div>

                <h3>' . get_the_title( $result->ID ) . '</h3>
            </a>
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