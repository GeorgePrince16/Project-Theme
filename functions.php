<?php 
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support
  function wpb_theme_setup() {
    add_theme_support('post_thumbnails');
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu'),
      'footer-menu' => __('Footer Menu')
    ));

    //Post Formats
    add_theme_support( 'post-formats', array(
    'gallery',
    'quote',
    'video',
    'aside',
    'image',
    'link',
    'status',
    'audio',
    'chat'
    ) ); 
  }

  add_action('after_setup_theme','wpb_theme_setup');

  //Control Excerpt Length
  function set_excerpt_length() {
    return 30;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

  function wpb_init_widgets($id) {
   /*register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));*/

    register_sidebar(array (
      'name'          =>  'Box1',
      'id'            =>  'box1',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));

     register_sidebar(array (
      'name'          =>  'Box2',
      'id'            =>  'box2',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));

      register_sidebar(array (
      'name'          =>  'Box3',
      'id'            =>  'box3',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));

      /* https://www.tipsandtricks-hq.com/how-to-add-widgets-to-wordpress-themes-footer-1033 */
      register_sidebar(array (
      'name'          => 'Footer Sidebar 1',
      'id'            => 'footer-sidebar-1',
      'before_widget' => '<div class="col-md-8">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

      register_sidebar(array (
      'name'          => 'Footer Sidebar 2',
      'id'            => 'footer-sidebar-2',
      'before_widget' => '<div class="col-md-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'wpb_init_widgets');

  //Customiser File
  require get_template_directory(). '/inc/customiser.php';

  // http://www.wpbeginner.com/wp-tutorials/how-to-change-the-login-logo-in-wordpress/

  function custom_loginlogo() {
    echo '<style type="text/css">
      h1 a {background-image: url('.get_bloginfo('template_directory').'/img/gryphon.png) !important; }
      </style>';
    }
  add_action('login_head', 'custom_loginlogo');