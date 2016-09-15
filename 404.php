<?php get_header();
$type = get_post_type(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>404: Page Not Found!</h1>
            <br>
            Please try again. <a href="<?php echo site_url(); ?>">Return to the Homepage?</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
