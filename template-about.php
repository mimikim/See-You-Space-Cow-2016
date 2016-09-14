<?php /* Template Name: About Page */
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 about-profile">
            <?php $thumbnail = get_featured_image( $post->ID ); ?>
            <img src="<?php echo $thumbnail; ?>" class="img-responsive profile-image">
            <?php echo get_the_content(); ?>

            <div class="links">
                <a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>" class="btn">See My Portfolio</a>
               <!-- <a href="<?php #echo get_permalink(21); ?>" class="btn">Read Blog Tutorials</a>-->
                <a href="<?php echo get_permalink(11); ?>" class="btn">Contact me!</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>