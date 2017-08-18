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
                <?php $i==1; while(have_rows('news_items')): the_row(); ?>
                  <?php if($i%6==0){ echo '</div><div class="item">'; } ?>
                  <a href="#" class="news-summary">
                    <p class="news-date">March 16, 2017</p>
                    <h2>Woman's Prison Sentence cut in stafford</h2>
                    <p class="news-source">Blogs.Fredericksburg.com</p>
                  </a>
                <?php $i++; endwhile; ?>
              </div>
            </div>
            <ol class="carousel-indicators">
              <?php for($c = 0; $c < $i; $c++): ?>
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