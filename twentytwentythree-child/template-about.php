<?php
/* Template Name: About Us */

get_header();

?>

<?php

$post = get_post();

$post_id = $post->ID;

$about_us = get_post($post_id);

echo $about_us->post_content;

?>

<!-- client -->
<div class="client py-60 bg-white" id="client">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="zoom-in"  data-aos-duration="500">
        <h5 class="sub_heading">Client</h5>
        <h2 class="border_title">Latest Work</h2>
        <p class="fw-300">
          Who can't thank you enough to all our clients who show faith in us
          to develop their applications and websites.
        </p>
      </div>
    </div>
    <div class="d-grid mt-5" id="client_section" data-aos="zoom-in"  data-aos-duration="500">
	     <?php echo do_shortcode('[clinets]'); ?>
    </div>
  </div>
</div>

<!-- vision -->
<div class="vision py-60 bg-banner" id="vision">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="zoom-in"  data-aos-duration="500">
        <h6 class="sub_heading">Goals</h6>
        <h2 class="border_title">Our Vision & Mission</h2>
        <p class="fw-300">
          We take care of your projects from sculpting a concept to handing
          it over to your dream users. All we need from you is your amazing
          idea and trust. At grewon, We conceptualize, Design and Develop
          in-house so your process runs as smooth as possible.
        </p>
      </div>
    </div>
    <div class="row justify-content-center mt-4">
      <div class="col-xxl-10">
        <div class="row justify-content-center">
          <div class="col-sm-9 col-md-6 col-lg-4 mt-4 position-relative goal-main" data-aos="fade-in-up"
             data-aos-duration="800">
            <div class="bg-white goal text-center">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/vision/vision.png" alt="vision.png" class="img-fluid" />
              </div>
              <h5>Our Vision</h5>
              <p class="font-size-14 fw-300">
                Analyzing the unique business needs and requirements, our
                custom web application design services ensure the delivery
                of limited functionality to assist. To become a reputed
                quality solution provider.
              </p>
            </div>
          </div>
          <div class="col-sm-9 col-md-6 col-lg-4 mt-4 position-relative goal-main" data-aos="fade-in-up"
             data-aos-duration="800">
            <div class="bg-white goal text-center">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/vision/mission.png" alt="mission.png" class="img-fluid" />
              </div>
              <h5>Our Mission</h5>
              <p class="font-size-14 fw-300">
                To help entrepreneurs and creative thinkers convert their
                ideas into reality through the power of emotional
                intelligence by providing world class facilities to our
                team.
              </p>
            </div>
          </div>
          <div class="col-sm-9 col-md-6 col-lg-4 mt-4 position-relative goal-main" data-aos="fade-in-up"
             data-aos-duration="800">
            <div class="bg-white goal text-center">
              <div class="icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/vision/trophy.png" alt="trophy.png" class="img-fluid" />
              </div>
              <h5>Core Values</h5>
              <p class="font-size-14 fw-300">
                Customer satisfaction, Immediate and reliable quality,
                service, support, Honesty and integrity. To deliver best
                products and services at legitimate rates
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- contact -->
<div class="contact py-60 bg-white" id="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12" data-aos="fade-up"  data-aos-duration="500">
        <h6 class="sub_heading mx-auto">Community</h6>
        <h2 class="border_title mx-auto mb-3">contact us</h2>
      </div>
    </div>
    <div class="row mt-3 pb-2 justify-content-center">
      <div class="col-lg-8 col-xl-6" data-aos="fade-down"  data-aos-duration="500">
      <div>
          <h3>Ready To Get Started?</h3>
          <p class="mb-3 mb-lg-4 fw-300">
          Connect on a no-pressure call to find out how I can help
          </p>
        </div>
        <!-- Form  -->
        <?php echo apply_shortcodes( '[contact-form-7 id="a8d5f48" title="surat-infotech form"]' ); ?>      
      </div>
    </div>
  </div>
</div>

<?php

get_footer();

?>
