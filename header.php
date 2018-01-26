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
    <title>Bangor Cricket Club</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
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