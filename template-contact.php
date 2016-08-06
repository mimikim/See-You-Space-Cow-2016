<?php /* Template Name: Contact Page */
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-7">

            <div class="contact-form-header">
                <h2>Standing by for your broadcast</h2>
                Submit the form below and watch the rocket ship launch into space!
                <div class="small">
                    Or just <span class="rocket-toggle">click here</span> to see the animation ;)
                </div>
            </div>

            <form id="contact-form">
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="contact-name" placeholder="Your Name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="contact-email" placeholder="Your Email">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="contact-message" placeholder="Your Message Here"></textarea>
                </div>

                <div class="error-message"></div>

                <input type="submit" class="btn btn-submit" value="Blast Off!" data-nonce="<?php echo wp_create_nonce('contact-email-form' ); ?>">
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
