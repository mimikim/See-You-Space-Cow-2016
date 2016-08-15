<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="category-container">
                <div class="title">
                    Filter by Category:
                </div>
                <?php
                $categories = get_categories( array(
                    'type' => 'portfolio',
                    'orderby' => 'name',
                    'parent'  => 0,
                    'exclude' => 1
                ) );

                foreach ( $categories as $category ) : ?>
                    <a href="<?php echo get_category_link( $category->term_id ); ?>" class="category-filter" data-category="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <?php

    $args = array(
        'posts_per_page'   => -1,
        'orderby'          => 'title',
        'order'            => 'ASC',
        'post_type'        => 'mk_portfolio',
        'post_status'      => 'publish',
        'suppress_filters' => true
    );
    query_posts( $args );

    $total_count = $wp_query->post_count;
    $end_of_posts_flag = false;
    $count = 0;

    if ( $total_count % 3 != 0 ) {
        $end_of_posts_flag = true;
    }

    while ( have_posts() ) : the_post(); ?>
        <?php echo ($count == 0) ? '<div class="row">' : ''; ?>

        <div class="col-sm-4 portfolio-item">
            <a href="<?php echo get_permalink(); ?>">
                <div class="image">
                    <?php $thumbnail = get_featured_image( $post->ID ); ?>
                    <img src="<?php echo $thumbnail; ?>" class="img-responsive">
                </div>

                <h3><?php echo get_the_title(); ?></h3>
            </a>
        </div>
        <?php
        $count++;

        if( ($total_count == 1) && ($end_of_posts_flag == true) ) {

            echo '</div>';

        } else {

            if($count == 3) {
                echo '</div>';
                $count = 0;
            };
        }

        $total_count--; ?>
    <?php endwhile; wp_reset_query(); ?>

</div>
<?php get_footer(); ?>
