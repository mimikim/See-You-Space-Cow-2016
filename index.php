<?php get_header();
$type = get_post_type(); ?>
<div class="container" id="index-template" data-post-type="<?php echo $type; ?>">
    <div class="row">
        <div class="col-md-12 selector-container">
            <div class="selector-dropdown"><span>Order By: </span>
                <select id="order-by-selector">
                    <option data-order-by="title" data-order="ASC">Name: A-Z</option>
                    <option data-order-by="title" data-order="DESC">Name: Z-A</option>
                    <option data-order-by="date" data-order="DESC">Date: New-Old</option>
                    <option data-order-by="date" data-order="ASC">Date: Old-New</option>
                </select>
            </div>
            <div class="selector-dropdown"><span>Show Count: </span>
                <select id="show-count-selector">
                    <option data-posts-per-page="-1">View All</option>
                    <option data-posts-per-page="15">View 15</option>
                    <option data-posts-per-page="30">View 30</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="category-container">
                <div class="title">
                    Filter by Category:
                </div>
                <?php
                $main_taxonomy = get_object_taxonomies($type);
                $categories = get_terms($main_taxonomy[0], array(
                    'type' => $type,
                    'orderby' => 'name',
                    'parent' => 0,
                    'exclude' => 1
                ));
                foreach ($categories as $category) : ?>
                    <div class="category-filter ga-tracking" data-category="<?php echo $category->term_id; ?>" data-event-category="Category Filter" data-event-action="Clicked Filter" data-event-label="<?php echo $category->name; ?>">
                        <?php echo $category->name; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="ajax-loader"></div>
    <div id="archive-results">
        <?php echo load_posts($type); ?>
    </div>
</div>
<?php get_footer(); ?>