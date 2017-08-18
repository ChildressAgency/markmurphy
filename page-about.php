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
          $practice_page = get_page_by_path('practice');
          $practice_page_id = $practice_page->ID;
          if(have_rows('areas_of_practice', $practice_page_id)): ?>
          <ul class="list-unstyled">
            <?php while(have_rows('areas_of_practice', $practice_page_id)): the_row(); ?>
              <li><?php the_sub_field('area_of_practice_title'); ?></li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
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