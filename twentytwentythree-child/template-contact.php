<?php
/* Template Name: Contact Us */

get_header();

?>

<?php

$post = get_post();

$post_id = $post->ID;

$contact_us = get_post($post_id);

echo $contact_us->post_content;

?>


<!-- contact -->
<div class="contact py-60 bg-white" id="contact">
    <div class="container">
        <div class="row align-items-center justify-content-center gap-3">
            <div class="col-lg-8" data-aos="fade-up"  data-aos-duration="500">
                <!-- <h6 class="sub_heading mx-auto">Get In Touch</h6> -->
                <h2 class="text-center mx-auto mb-3">Let's talk through your goals, budget, and ideal solutions</h2>
            </div>
            <div class="col-lg-8 col-xl-6" data-aos="fade-down"  data-aos-duration="500">
                <div>
                    <p class="mb-3 mb-lg-4 fw-300 text-center">
                        Connect on a no-pressure call to find out how I can help
                    </p>
                </div>
                <!-- Form  -->
                <?php echo apply_shortcodes('[contact-form-7 id="a8d5f48" title="surat-infotech form"]'); ?>
            </div>
        </div>
    </div>
</div>

<!-- map -->
<div class="container-fluid p-0">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29754.49481882738!2d72.87218236291648!3d21.21947888590292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f3b466fffc1%3A0x8f5bf91b887f5421!2sSurat%20Infotech!5e0!3m2!1sen!2sin!4v1688474098133!5m2!1sen!2sin"
            style="border: 0" allowfullscreen="" loading="lazy" class=""
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php

get_footer();

?>