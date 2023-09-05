<?php

get_header();

?>

<?php

$post = get_post();

$post_id = $post->ID;

$case_studies = get_post($post_id);

echo $case_studies->post_content;

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
