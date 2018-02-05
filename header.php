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
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
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