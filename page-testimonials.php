<?php get_header(); ?>
<section id="testimonials">
  <div class="container">
    <h1>Testimonials</h1>
    <div class="row">
      <div class="col-sm-5">
        <?php
          $testimonials = get_field('testimonials');
          $total_testimonials = count($testimonials);
          $half_testimonials = $total_testimonials/2;
          $t=1;

          foreach($testimonials as $testimonial): ?>
            <div class="testimonial-block">
              <div class="testimonial-header">
                <h2><?php echo $testimonial['testimonial_callout']; ?></h2>
                <p class="author">- <?php echo $testimonial['testimonial_author']; ?></p>
              </div>
              <?php echo $testimonial['testimonial']; ?>
            </div>
            <?php if($t==$half_testimonials){ echo '</div><div class="col-sm-7">'; } ?>
        <?php $t++; endforeach; ?>
      </div>
    </div>
  </div>
  <div class="testimonials-content-overlay"></div>
</section>
<?php get_footer(); ?>