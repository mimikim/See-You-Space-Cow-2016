<?php get_header();
$type = get_post_type(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="category-container" data-post-type="<?php echo $type; ?>">
                <div class="title">
                    Filter by Category:
                </div>
                <?php
                $main_taxonomy = get_object_taxonomies( $type );

                $categories = get_terms( $main_taxonomy[0], array(
                    'type' => $type,
                    'orderby' => 'name',
                    'parent'  => 0,
                    'exclude' => 1
                ) );

                foreach ( $categories as $category ) : ?>
                    <div class="category-filter" data-category="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
    <div class="ajax-loader"></div>
    <div id="archive-results">
        <?php echo load_posts( $type ); ?>
    </div>
</div>
<?php get_footer(); ?>
