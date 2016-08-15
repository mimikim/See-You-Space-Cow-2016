<header>
    <div class="container top-header">
        <div class="row">
            <div class="col-xs-9 site-logo">
                <a href="<?php echo site_url(); ?>">mimi kim web developer</a>
            </div>
            <div class="col-xs-3 menu">
                <div id="menu-toggle">
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
                <a href="<?php echo get_post_type_archive_link( 'mk_portfolio' ); ?>">Work</a>
            </li>
            <li>
                <a href="">Tutorials</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="<?php echo get_permalink(11); ?>">Contact</a>
            </li>
        </ul>
    </div>
</header>