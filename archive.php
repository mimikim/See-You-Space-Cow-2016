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

                #echo get_category_link( $category->term_id );

                foreach ( $categories as $category ) : ?>
                    <div class="category-filter" data-category="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
    <div class="ajax-loader"></div>
    <div id="archive-results">
        <?php echo load_posts(); ?>
    </div>
</div>
<?php get_footer(); ?>
