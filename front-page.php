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
    <style>
      .showcase {
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url'). '/img/showcase.jpg'); ?>) center center;
        background-repeat: no-repeat;
      }
    </style>
  </head>

  <body>

    <!-- https://www.pattonwebz.com/wordpress-custom/bootstrap-wordpress-responsive-menu/ -->

    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <img src="<?php bloginfo('template_directory'); ?>/img/bcc-logo.png">
    <a style="color: #001350; background: #fff;" class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php
        wp_nav_menu( array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             =>  2,
    'container'         => false,
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_page_menu',
    'walker'            => new WP_Bootstrap_Navwalker(),
));
        ?>
    <!-- https://github.com/wp-bootstrap/wp-bootstrap-navwalker/issues/58 -->

    <?php $ph = ""; ?>
            <form action="<?php echo home_url(); ?>" id="search_form" class="search_wrapper navbar-form navbar-right" method="get">
                <label class="sr-only" for="s">Search</label>
                <div class="form-group">
                    <input type="text" class="search_input" id="s" name="s" autocomplete="off" placeholder="Type here..."
                        value="<?php echo $ph; ?>"
                        onfocus="if(this.value=='<?php echo $ph; ?>')this.value='';"
                        onblur="if(this.value=='')this.value='<?php echo $ph; ?>'"
                        placeholder="<?php echo $ph; ?>"
                    />
                </div>
                <input type="submit" value="" id="search_submit" class="search_submit button normal" />
            </form>
    </div><!-- /.navbar-collapse --> 
</nav>

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
      <!-- https://www.tipsandtricks-hq.com/how-to-add-widgets-to-wordpress-themes-footer-1033 -->
      <div class="row">
        <div id="footer-menu" class="col-md-6">
          <?php if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
          } ?>
        </div>
        <div class="col-md-6">
          <?php if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
          } ?>
        </div>
      </div>
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>
        <p><a href="#">Back to top</a></p>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>

