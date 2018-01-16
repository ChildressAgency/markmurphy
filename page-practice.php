<?php get_header(); ?>
<section id="practiceMain">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <section id="criminalDefense">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </section>
        <section id="typesOfCharges">
          <h2><?php the_field('type_of_charge_section_title'); ?></h2>
          <div class="row">
            <?php
              $charges = new WP_Query(array(
                'post_type' => 'charges',
                'posts_per_page' => -1,
                'post_status' => 'publish'
              ));

              if($charges->have_posts()): $i=0; while($charges->have_posts()): $charges->the_post(); 
                if($i%3==0){ echo '<div class="clearfix"></div>'; } ?>
                <div class="col-sm-4">
                  <div class="charge-type">
                    <h3><?php the_title(); ?></h3>
                    <?php if(have_rows('details_sections')): ?>
                      <ul class="list-unstyled">
                        <?php $c=0; while(have_rows('details_sections') && $c < 3): the_row(); ?>
                          <li><?php echo get_sub_field('detail_section_title') ? get_sub_field('detail_section_title') : '&nbsp;'; ?></li>
                        <?php $c++; endwhile; ?>
                      </ul>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>">View All ></a>
                  </div>
                </div>
            <?php $i++; endwhile; endif; wp_reset_postdata(); ?>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<section id="practiceAreas">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-sm-offset-3">
        <div class="practice-areas-descriptions">
          <h1>Areas of practice</h1>
          <div class="row">
            <div class="col-sm-6">
              <?php 
                $total_charges = wp_count_posts('charges')->publish;
                $half_total_charges = $total_charges/2;
                $p=1;
                while($charges->have_posts()): $charges->the_post(); ?>
                  <div class="practice-area-description">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                  </div>
                  <?php if($p==$half_total_charges){ echo '</div><div class="col-sm-6">'; } ?>
              <?php $p++; endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>