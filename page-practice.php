<?php get_header(); ?>
<section id="practiceAreas">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <section id="criminalDefense">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </section>
        <div class="practice-areas-descriptions">
          <h1>Areas of practice</h1>
          <div class="row">
            <div class="col-sm-6">
              <?php 
                //$total_charges = wp_count_posts('charges')->publish;
                //$half_total_charges = $total_charges/2;
                //$p=1;
                $practices = new WP_Query(array(
                  'post_type' => 'practice_areas',
                  'posts_per_page' => -1,
                  'post_status' => 'publish'
                ));

                $practices_count = wp_count_posts($practices)->publish;
                $half_practices = $practices_count/2;
                $p=1;

                if($practices->have_posts()): while($practices->have_posts()): $practices->the_post(); ?>
                  <div class="practice-area-description">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                  </div>
                  <?php if($p==$half_practices){ echo '</div><div class="col-sm-6">'; } ?>
              <?php $p++; endwhile; endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>