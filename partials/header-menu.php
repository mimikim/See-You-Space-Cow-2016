<header>
    <div class="container top-header">
        <div class="row">
            <div class="col-xs-9 site-logo">
                <a href="<?php echo site_url(); ?>" class="ga-tracking" data-event-category="Menu" data-event-action="Clicked - Homepage" data-event-label="Header Menu Homepage">mimi kim web developer</a>
            </div>
            <div class="col-xs-3 menu">
                <div id="menu-toggle" class="ga-tracking" data-event-category="Menu" data-event-action="Hamburger Toggled" data-event-label="">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-overlay">
        <ul>
            <li>
                <a href="<?php echo get_site_url() ?>" class="ga-tracking" data-event-category="Menu" data-event-action="Clicked Menu Item" data-event-label="Home">Home</a>
            </li>
            <li>
                <a href="<?php echo get_site_url() ?>" class="ga-tracking" data-event-category="Menu" data-event-action="Clicked Menu Item" data-event-label="Home">Blog</a>
            </li>
            <li>
                <a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>" class="ga-tracking" data-event-category="Menu" data-event-action="Clicked Menu Item" data-event-label="Portfolio">Portfolio</a>
            </li>
            <?php /*<li>
                <a href="<?php #echo get_permalink(21); ?>">Blog</a>
            </li> */ ?>
            <li>
                <a href="<?php echo get_permalink(25); ?>" class="ga-tracking" data-event-category="Menu" data-event-action="Clicked Menu Item" data-event-label="About">About</a>
            </li>
            <li>
                <a href="<?php echo get_permalink(11); ?>" class="ga-tracking" data-event-category="Menu" data-event-action="Clicked Menu Item" data-event-label="Contact">Contact</a>
            </li>
        </ul>
    </div>
</header>