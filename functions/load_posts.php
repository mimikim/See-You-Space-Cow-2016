<?php
function load_posts( $category = null ) {

    $args = array(
        'posts_per_page'   => -1,
        'orderby'          => 'title',
        'order'            => 'ASC',
        'post_type'        => 'mk_portfolio',
        'post_status'      => 'publish',
        'suppress_filters' => true
    );

    if ( $category != null ) {
        $args['cat'] = $category;
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