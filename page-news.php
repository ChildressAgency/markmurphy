<?php get_header(); ?>
<section id="inTheNews">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-3 col-md-offset-2">
        <div class="in-the-news-header">
          <h1>In the News</h1>
        </div>
      </div>
      <div class="col-sm-7">
        <?php if(have_rows('news_items')): ?>
          <div id="articlesCarousel" class="carousel slide" data-ride="">
            <div class="carousel-inner">
              <div class="item active">
                <?php $i=1; while(have_rows('news_items')): the_row(); ?>
                  <?php if($i%6==0){ echo '</div><div class="item">'; } ?>
                  <a href="<?php the_sub_field('article_link'); ?>" class="news-summary" target="_blank">
                    <p class="news-date"><?php the_sub_field('article_date'); ?></p>
                    <h2><?php the_sub_field('article_title'); ?></h2>
                    <p class="news-source"><?php the_sub_field('article_source'); ?></p>
                  </a>
                <?php $i++; endwhile; ?>
              </div>
            </div>
            <ol class="carousel-indicators">
              <?php 
              $num_pages = ceil($i/6);
              for($c = 0; $c < $num_pages; $c++): ?>
                <li data-target="#articlesCarousel" data-slide-to="<?php echo $c; ?>"<?php if($c==0){ echo ' class="active"'; } ?>></li>
              <?php endfor; ?>
            </ol>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>