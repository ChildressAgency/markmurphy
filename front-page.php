<?php get_header(); ?>
<section id="hp-hero">
  <div class="caption-wrapper">
    <div class="caption">
      <p><?php the_field('hero_title'); ?></p>
      <a href="<?php echo home_url('practice'); ?>" class="btn-main btn-alt btn-big">Areas of Practice</a>
      <a href="<?php echo home_url('about'); ?>" class="btn-main btn-alt btn-big">Personal Approach</a>
      <a href="<?php echo home_url('contact'); ?>" class="btn-main btn-alt btn-big">Contact Us</a>
    </div>
  </div>
</section>
<section id="hpTestimonials">
  <div class="container">
    <h1>Testimonials</h1>
    <?php 
      $testimonials_page = get_page_by_path('testimonials');
      $testimonials_page_id = $testimonials_page->ID; 
      if(have_rows('testimonials', $testimonials_page_id)): ?>
        <div id="testimonialCarousel" class="carousel slide" data-ride="">
          <div class="carousel-inner">
            <?php $t=0; while(have_rows('testimonials', $testimonials_page_id)): the_row(); ?>
              <div class="item<?php if($t==0){ echo ' active'; } ?>">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="testimonial-callout">
                      <p class="callout"><?php the_sub_field('testimonial_callout'); ?></p>
                      <p class="author">- <?php the_sub_field('testimonial_author'); ?></p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="testimonial">
                      <?php the_sub_field('testimonial'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php if($t > 3){ break; } ?>
            <?php $t++; endwhile; ?>
          </div>
          <div class="carousel-controls">
            <a href="#testimonialCarousel" class="" role="button" data-slide="prev">
              <span class="fa fa-angle-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a href="#testimonialCarousel" class="" role="button" data-slide="next">
              <span class="fa fa-angle-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      <?php endif; ?>
    <a href="<?php echo home_url('testimonials'); ?>" class="btn-main">Read More</a>
    <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact</a>
  </div>
</section>
<section id="empty"></section>
<section id="mission">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-7 col-sm-height">
        <h1>How we will represent you</h1>
        <?php the_field('how_will_represent_content'); ?>
        <div class="btns-centered">
          <a href="<?php echo home_url('about'); ?>" class="btn-main">About</a>
          <a href="<?php echo home_url('practice'); ?>" class="btn-main">Practices</a>
          <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact</a>
        </div>
      </div>
      <div class="col-sm-5 hidden-xs col-sm-height">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stack-of-books.jpg" class="img-responsive center-block" alt="Stack of books" />
      </div>
    </div>
  </div>
</section>
<section id="areasOfPractice">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-7 col-sm-height col-sm-push-5">
        <div class="defense-practice">
          <h1>Criminal Defense</h1>
          <h2>Areas of Practice</h2>
        </div>
        <div class="clearfix visible-xs-block"></div>
      </div>
      <div class="col-sm-5 col-sm-height col-sm-pull-7">
        <?php 
          $practices = new WP_Query(array(
            'post_type' => 'charges',
            'posts_per_page' => -1
          ));
          
          if($practices->have_posts()): ?>
            <ul class="list-unstyled">
              <?php while($practices->have_posts()): $practices->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
            </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section id="about">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-6 col-sm-height">
        <div class="about-content">
          <h1>Mark A. Murphy</h1>
          <?php the_field('brief_about_statement'); ?>
        </div>
      </div>
      <div class="col-sm-6 col-sm-height">
        <div class="detailed-practice-list">
          <?php if(have_rows('detailed_practices', $practice_page_id)): ?>
            <ul class="list-unstyled">
              <?php while(have_rows('detailed_practices', $practice_page_id)): the_row(); ?>
                <li><?php the_sub_field('detailed_practice_title'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
        <div class="btns-centered">
          <a href="<?php echo home_url('about'); ?>" class="btn-main">Read More</a>
          <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="inTheNews">
  <div class="container-fluid container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-5 col-sm-height">
        <div class="in-the-news-header">
          <h1>In the News</h1>
          <a href="<?php echo home_url('news'); ?>" class="btn-main">Read More</a>
        </div>
      </div>
      <div class="col-sm-7 col-sm-height">
        <?php 
          $news_page = get_page_by_path('news');
          $news_page_id = $news_page->ID;
          $n=0;
          if(have_rows('news_items', $news_page_id)): while(have_rows('news_items', $news_page_id)): the_row(); ?>
            <a href="<?php the_sub_field('article_link'); ?>" class="news-summary" target="_blank">
              <p class="news-date"><?php the_sub_field('article_date'); ?></p>
              <h2><?php the_sub_field('article_title'); ?></h2>
              <p class="news-source"><?php the_sub_field('article_source'); ?></p>
            </a>
        <?php if($n > 3){ break; } $n++; endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>