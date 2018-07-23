<?php get_header(); ?>
<section id="aboutMission">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-7 col-sm-height">
        <div class="mission-content">
          <h1>Mission Statement</h1>
          <?php the_field('mission_statement'); ?>
        </div>
      </div>
      <div class="col-sm-5 col-sm-height">
        <div class="mission-statement">
          <h2><?php the_field('mission_statement_callout'); ?></h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="areasOfPractice" class="about-page-areas" style="">
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
            'post_type' => 'practice_areas',
            'posts_per_page' => -1,
            'post_status' => 'publish'
          ));

          if($practices->have_posts()): ?>
            <ul class="list-unstyled">
              <?php while($practices->have_posts()): $practices->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<section id="mission">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-7 col-sm-height">
        <h1>Mark Murphy</h1>
        <?php the_field('about_content'); ?>
        <div class="btns-centered">
          <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact</a>
          <a href="<?php echo home_url('practice'); ?>" class="btn-main">Practices</a>
        </div>
      </div>
      <div class="col-sm-5 col-sm-height">
        <img src="<?php the_field('mark_murphy_image'); ?>" class="aligncenter" alt="Mark A. Murphy" />
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>