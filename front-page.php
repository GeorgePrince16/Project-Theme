<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Blog Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
      .showcase {
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url'). '/img/showcase.jpg'); ?>) center center;
        background-repeat: no-repeat;
      }
    </style>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
wp_nav_menu( array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             =>  2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'bs-example-navbar-collapse-1',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
) ); ?>
        </nav>
      </div>
    </div>

	<section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'This is the start of my Theme');?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'This is some DUMMY Text which is then followed by some more DUMMY TEXT');?></p>
        <a <?php echo get_theme_mod('btn_url', 'http://www.google.com');?> class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Read More');?></a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <?php if(is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
          </div>
          <div class="col-md-4">
              <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
          </div>
          <div class="col-md-4">
              <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>
