<?php get_header(); ?>
<section id="mainContent">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="read-more">[READ MORE]</a>
    <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>