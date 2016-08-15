<?php get_header(); ?>

<div class="intro-div">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Where No Cow Has Gone Before...</h2>

                <div class="text">
                    <p>
                        I am a frontend developer in love with impossible dreams and spacefaring bovines.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 specialties">
                <div class="cow-face"></div>
                <h3>Wordpress</h3>
                <p>
                    <em>Wordpress rules my life</em>
                </p><p>
                    Highly customized, clean Wordpress themes built with an end-user's experience in mind.
                </p>
            </div>
            <div class="col-md-4 specialties">
                <div class="cow-face"></div>
                <h3>HTML/CSS/JS</h3>
                <p>
                    <em>Static sites without a CMS</em>
                </p><p>
                    Straight HTML pages. Old school, without reliance on a CMS, but still just as modern.
                </p>
            </div>
            <div class="col-md-4 specialties">
                <div class="cow-face"></div>
                <h3>Responsive Emails</h3>
                <p>
                    <em>Emails are easy</em>
                </p><p>
                    Responsive html emails that render correctly across all popular email clients, including Outlook and Android Gmail!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="featured-work">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Featured Portfolio Work</h2>

                <div class="homepage-slider">

                    <?php
                        $portfolio = get_field('featured_work_slider');

                        foreach ( $portfolio as $p ) :
                    ?>

                    <div class="slide">
                        <a href="<?php echo get_permalink($p['portfolio_item']->ID); ?>">
                            <?php $thumbnail = get_featured_image( $p['portfolio_item']->ID ); ?>
                            <img src="<?php echo $thumbnail; ?>" class="img-responsive">
                            <div>

                                <h3><?php echo $p['portfolio_item']->post_title; ?></h3>
                            </div>
                        </a>
                    </div>

                   <?php endforeach; ?>
                </div>

                <div class="see-more"><a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>" class="btn btn-inline">See All Portfolio Work</a></div>

            </div>
        </div>
    </div>
</div>

<div class="latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Latest Tutorial Posts</h2>

                <?php $args = array(
                    'numberposts' => 5,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );

                $recent_posts = wp_get_recent_posts( $args );
                ?>

                <div class="homepage-slider">

                    <?php foreach ( $recent_posts as $recent ) : ?>

                    <div class="slide">
                        <a href="<?php echo get_permalink($recent['ID']); ?>">

                        <?php $thumbnail = get_featured_image( $recent['ID'] ); ?>
                        <img src="<?php echo $thumbnail; ?>" class="img-responsive">
                        <div>

                            <h3><?php echo $recent['post_title']; ?></h3>
                            <div>
                                <div>
                                    <em><?php echo date('M j, Y', strtotime($recent['post_date'])); ?></em>
                                </div>
                                Lorem ipsum work details lorem ipsum dolor work details lorem ipsum dolor work details
                            </div>
                        </div>

                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>

                <div class="see-more"><a href="" class="btn btn-inline">See All Tutorial Posts</a></div>

            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
