<?php get_header(); ?>
<div class="container">
    <div class="row portfolio-overview">
        <div class="col-md-8">
            <?php
            $portfolio_images = get_field('portfolio_images');
            if ( !empty($portfolio_images) ) :
                echo '<div class="portfolio-slider-for">';
                foreach( $portfolio_images as $slide ) : ?>
                    <div class="image">
                        <img src="<?php echo $slide['image']['url']; ?>" class="img-responsive" alt="Portfolio Item Image">
                    </div>
                <?php
                endforeach;

                echo '</div>';
                echo '<div class="portfolio-slider-nav">';
                foreach( $portfolio_images as $slide_thumbnail ) : ?>
                    <div class="thumbnail">
                        <img src="<?php echo $slide_thumbnail['image']['sizes']['thumbnail']; ?>" class="img-responsive" alt="Portfolio Item Thumbnail">
                    </div>
                <?php
                endforeach;
                echo '</div>';
            endif; ?>
        </div>
        <div class="col-md-4 portfolio-specs">
            <?php
                $client_name = get_field('client_name');
                $client_site = get_field('client_site_url');
                $year = get_field('year');
                $company_name = get_field('company');
                $company_site = get_field('company_site');
            ?>
            <h2>Overview</h2>

            <div class="spec">
                <h3>Client Name:</h3> <a href="<?php echo $client_site; ?>" target="_blank"><?php echo $client_name; ?></a>
            </div>
            <div class="spec">
                <h3>Year:</h3> <?php echo $year; ?>
            </div>
            <?php /* ?><div class="spec">
                <h3>Company:</h3> <a href="<?php echo $company_site; ?>" target="_blank"><?php echo $company_name; ?></a>
            </div>
            <div class="spec">
                <h3>Tags:</h3>
                <?php
                if(get_the_tag_list()) {
                    echo get_the_tag_list('<ul class="taglist"><li>','</li><li>','</li></ul>');
                }
                ?>
            </div><?php */ ?>
        </div>
    </div>
    <?php if( have_posts() ) : while ( have_posts() ) : the_post();
        $content = get_the_content();
        if ( !empty($content) ) :
    ?>
    <div class="row">
        <div class="col-md-12 additional-details">
            <h2>Additional Details:</h2>
            <?php the_content(); ?>
        </div>
    </div>
    <?php endif; endwhile; endif; ?>
    <div class="row">
        <div class="col-md-12 back-to-portfolio">
            <a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>" class="btn btn-inline">Back to Portfolio</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
