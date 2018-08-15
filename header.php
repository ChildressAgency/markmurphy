<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="cache-control" content="private">

    <title>Mark A. Murphy Attorney</title>

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav id="header-nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-2 hidden-xs">
            <div class="header-call">
              <p>CALL NOW FOR CRIMINAL MATTERS</p>
              <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
              <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="btn-main btn-alt">Call Now</a>
            </div>
          </div>
          <div class="col-sm-6 col-md-8">
            <div class="navbar-header">
              <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Mark A. Murphy Logo" /></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          </div>
          <div class="col-sm-3 col-md-2 hidden-xs">
            <?php
              $linkedin = get_field('linkedin', 'option'); 
              $facebook = get_field('facebook', 'option');
              $twitter = get_field('twitter', 'option');
            ?>
            <div class="navbar-social">
              <?php if($linkedin): ?>
                <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
              <?php endif; if($facebook): ?>
                <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-square"></i></a>
              <?php endif; if($twitter): ?>
                <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php 
          $items_wrap_phone = '<li class="visible-xs-block"><div class="header-call">';
          $items_wrap_phone .= '<p>CALL TODAY FOR A FREE CONSULTATION ON CRIMINAL MATTERS</p>';
          $items_wrap_phone .= '<a href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>';
          $items_wrap_phone .= '</div></li>';

          $items_wrap_social = '<li class="vixible-xs-block"><div class="navbar-social">';
          if($linkedin){
            $items_wrap_social .= '<a href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>';
          }
          if($facebook){
            $items_wrap_social .= '<a href="' . $facebook . '"><i class="fa fa-facebook-square"></i></a>';
          }
          if($twitter){
            $items_wrap_social .= '<a href="' . $twitter . '"><i class="fa fa-twitter"></i></a>';
          }
          $items_wrap_social .= '</div></li>';

          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'navbar-collapse collapse',
            'container_id' => 'navbar',
            'menu_class' => 'nav nav-justified',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'markmurphy_fallback_header_menu', 
            'items_wrap' => '<ul id="%1$s" class="%2$s">' . $items_wrap_phone . '%3$s' . $items_wrap_social . '</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($header_nav_args); ?>
      </div>
    </nav>
