<header>
    <div class="container top-header">
        <div class="row">
            <div class="col-md-6 site-logo">
                <a href="<?php echo site_url(); ?>">mimi kim web developer</a>
            </div>
            <div class="col-md-6 menu">
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
                <a href="">Work</a>
            </li>
            <li>
                <a href="">Blog</a>
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