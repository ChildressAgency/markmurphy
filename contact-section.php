<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-push-6">
        <div class="contact-info">
          <h1>Contact Us</h1>
          <p>The Law Office of Mark A. Murphy welcomes the opportunity to evaluate cases and advise potential clients in free initial consultations for criminal cases. To schedule an appointment, call our offices or submit the form <span class="hidden-xs">to the left</span><span class="visible-xs-inline">below</span>. Please indicate how you would like to be contacted. For immediate assistance, please contact:</p>
          <p class="phone-address">OUR OFFICE <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
          <p class="phone-address">OUR OFFICE <a href="#"><?php the_field('street_address', 'option'); ?> <?php the_field('city_state_zip', 'option'); ?></a></p>
          <div class="contact-info-social">
            <?php if(get_field('linkedin', 'option')): ?>
              <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i></a>
            <?php endif; if(get_field('facebook', 'option')): ?>
              <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-square"></i></a>
            <?php endif; if(get_field('twitter', 'option')): ?>
              <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-sm-pull-6">
        <?php echo do_shortcode('[contact-form-7 id="18" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</section>