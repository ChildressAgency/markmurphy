<?php get_header(); ?>
<section id="practiceMain">
  <div class="container container-sm-height">
    <div class="row row-sm-height">
      <div class="col-sm-8 col-md-9 col-sm-height col-sm-push-4 col-md-push-3">
        <div class="practice-main-content">
          <h1>Criminal defense</h1>
          <?php the_field('criminal_defense_content'); ?>
          <?php 
            $areas_of_practice = get_field('areas_of_practice');
            if($areas_of_practice): ?>
              <ul class="list-unstyled criminal-defense-items">
                <?php foreach($areas_of_practice as $area): ?>
                  <li><?php echo $area['area_of_practice_title']; ?></li>
                <?php endforeach; reset($areas_of_practice); ?>
              </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-4 col-md-3 col-sm-height col-sm-pull-8 col-md-pull-9">
        <?php
          $detailed_practices = get_field('detailed_practices');
          if($detailed_practices): ?>
            <div class="detailed-practice-list">
              <ul class="list-unstyled">
                <?php foreach($detailed_practices as $practice): ?>
                  <li><?php echo $practice['detailed_practice_title']; ?></li>
                <?php endforeach; reset($detailed_practices); ?>
              </ul>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section id="practiceAreas">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9">
        <div class="practice-areas-descriptions">
          <h1>Areas of practice</h1>
          <div class="row">
            <div class="col-sm-6">
              <?php
                $total_areas = count($areas_of_practice);
                $half_total_areas = $total_areas/2;
                $p=1;
                foreach($areas_of_practice as $area): ?>
                  <div class="practice-area-description">
                    <h2><?php echo $area['area_of_practice_title']; ?></h2>
                    <?php echo $area['area_of_practice_description']; ?>
                  </div>
                  <?php if($p==$half_total_areas){ echo '</div><div class="col-sm-6"'; } ?>
                <?php $p++; endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="detailedPractices">
  <div class="container">
    <ul class="list-unstyled detailed-practices">
      <?php foreach($detailed_practices as $practice): ?>
        <li>
          <h2><?php echo $practice['detailed_practice_title']; ?></h2>
          <p><?php echo $practice['detailed_practice_description']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php get_footer(); ?>