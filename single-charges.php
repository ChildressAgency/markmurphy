<?php get_header(); ?>
<main id="mainContent">
  <div class="container">
    <section id="chargesContent">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
       <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </section>
    <?php if(have_rows('details_sections')): ?>
      <section id="detailSections">
        <div class="row">
          <?php $i=0; while(have_rows('details_sections')): the_row(); ?>
            <?php if($i%2==0){ echo '<div class="clearfix"></div>'; } ?>
            <div class="col-sm-6">
              <div class="detail-section">
                <h3><?php the_sub_field('detail_section_title'); ?></h3>
                <?php the_sub_field('detail_section_content'); ?>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>
      </section>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>