    <footer>
      <?php get_template_part('contact-section'); ?>
      <nav id="footer-nav">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clover-icon.png" class="img-responsive" alt="Clover icon" /></a>
            </div>
            <div class="col-sm-6">
              <?php 
                $footer_nav_args = array(
                  'theme_location' => 'footer-nav',
                  'menu' => '',
                  'container' => '',
                  'container_class' => '',
                  'container_id' => '',
                  'menu_class' => 'nav nav-justified',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => 'markmurphy_fallback_footer_menu',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth' => 1,
                  'walker' => new wp_bootstrap_navwalker()
                );
                wp_nav_menu($footer_nav_args); ?>
            </div>
            <div class="col-sm-3">
              <div class="navbar-social">
                <?php if(get_field('linkedin', 'option')): ?>
                  <a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i></a>
                <?php endif; if(get_field('facebook', 'option')): ?>
                  <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-square"></i></a>
                <?php endif; if(get_field('twitter', 'option')): ?>
                  <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="copyright">
            <p>&copy<?php echo date('Y'); ?> Mark A. Murphy</p>
            <p>website created by <a href="https://childressagency.com">The Childress Agency</a></p>
          </div>
        </div>
      </nav>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>