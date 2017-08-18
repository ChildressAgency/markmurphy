<?php get_header(); ?>
<section id="mainContent">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>