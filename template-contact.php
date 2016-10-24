<?php /* Template Name: Contact Page */
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="contact-form-header">
                <h2>Standing by for your broadcast</h2>
                <span class="text">Submit the form below and watch the rocket ship launch into space!</span>
                <div class="small">
                    Or just <span class="rocket-toggle ga-tracking" data-event-category="Contact Page" data-event-action="Clicked Text Link" data-event-label="">click here</span> to see the animation ;)
                </div>
            </div>
            <div class="ajax-loader"></div>
            <form id="contact-form">
                <div>
                    <label for="contact-name">Name</label>
                    <input type="text" id="contact-name" placeholder="Your Name">
                </div>
                <div>
                    <label for="contact-email">Email</label>
                    <input type="text" id="contact-email" placeholder="Your Email">
                </div>
                <div>
                    <label for="contact-message">Message</label>
                    <textarea name="message" id="contact-message" placeholder="Your Message Here"></textarea>
                </div>
                <div class="error-message"></div>
                <input type="submit" class="btn btn-submit ga-tracking" value="Blast Off!" data-nonce="<?php echo wp_create_nonce('contact-email-form' ); ?>" data-event-category="Contact Form" data-event-action="Form Button Clicked" data-event-label="">
            </form>
        </div>
        <div class="col-sm-5">
            <div class="rocket-container">
                <div class="canvas-container">
                    <canvas id="rocket-canvas" height="680" width="400">
                        <p>HTML5 Canvas does not load for your browser!</p>
                    </canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
