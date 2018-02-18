<?php 
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support
  function wpb_theme_setup() {
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu'),
      'footer-menu' => __('Footer Menu')
    ));

  // Adding jQuery Script
  wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array ( 'jquery' ), true);
  wp_enqueue_script( 'script', get_template_directory_uri() . '/backToTop.js', array ( 'jquery' ), true);

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
      'before_widget' => '<aside id="%1$s" class="%2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

      register_sidebar(array (
      'name'          => 'Footer Sidebar 2',
      'id'            => 'footer-sidebar-2',
      'before_widget' => '<aside id="%1$s" class="%2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

      register_sidebar(array (
      'name'          => 'Sponsors',
      'id'            => 'sponsors',
      'before_widget' => '<div id="sponsors" class="%2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title" id="sponsors">',
      'after_title'   => '</h1>'
    ));

      register_sidebar(array (
      'name'          =>  'News Box1',
      'id'            =>  'news-box1',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));

     register_sidebar(array (
      'name'          =>  'News Box2',
      'id'            =>  'news-box2',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));

      register_sidebar(array (
      'name'          =>  'News Box3',
      'id'            =>  'news-box3',
      'before_widget' => '<div class="box">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'wpb_init_widgets');

  //Customiser File
  require get_template_directory(). '/inc/customiser.php';

  // https://wp-time.com/recent-posts-with-thumbnails-in-wordpress/
  function wptime_get_recent_posts($post_id = null, $count = null){
 
    if( !empty($post_id) ){
        $id = $post_id;
    } else {
        $id = '';
    }
 
    if( empty($count) ){
        $count = 3; 
    }
 
    $args = array(
                'numberposts' => $count,
                'offset' => 0,
                'category' => 0, 
                'orderby' => 'post_date',
                'order' => 'DESC',
                'include' => '',
                'exclude' => $id,
                'meta_key' => '',
                'meta_value' =>'',
                'post_type' => 'post', 
                'post_status' => 'publish', 
                'suppress_filters' => true
            );
 
    $recent_posts = wp_get_recent_posts($args, false);
 
    ob_start();
 
    foreach ($recent_posts as $recent_post) {
        $post_link = esc_url( get_permalink($recent_post->ID) );
        $post_title_attr = esc_attr( get_the_title($recent_post->ID) );
        $post_title = get_the_title($recent_post->ID);
        $post_excerpt = get_the_excerpt($recent_post->ID);
 
        if( has_post_thumbnail($recent_post->ID) ){ 
            $thumbnail_id = get_post_thumbnail_id($recent_post->ID);
            $image_size = 'thumbnail'; 
            $get_thumbnail_url = wp_get_attachment_image_src($thumbnail_id, $image_size);
            $image = '<img src="'.$get_thumbnail_url[0].'" alt="'.$post_title_attr.'">'; 
        } else {
            $image = '<img src="http://example.com/default-image.png" alt="'.$post_title_attr.'">'; 
        }
        ?>
            <div class="col-md-4">
                <?php echo $image; ?>
                <h3><a href="<?php echo $post_link; ?>" title="<?php echo $post_title_attr; ?>"><?php echo $post_title; ?></a></h3>
                <p><?php echo $post_excerpt; ?></p>
            </div>
        <?php
    }
 
    $get_recent_posts = ob_get_clean();
 
    echo $get_recent_posts;
}

function wptime_recent_posts_shortcode($atts){
    ob_start();
 
    global $post;
 
    $post_id = $post->ID;
 
    if( !empty($atts['count']) ){
        $count = $atts['count']; 
    }else{
        $count = null;
    }
 
    wptime_get_recent_posts($post_id, $count);
 
    return ob_get_clean();
}
add_shortcode('wptime_recent_posts', 'wptime_recent_posts_shortcode'); 

  // http://www.wpbeginner.com/wp-tutorials/how-to-change-the-login-logo-in-wordpress/

  function custom_loginlogo() {
    echo '<style type="text/css">
      h1 a {background-image: url('.get_bloginfo('template_directory').'/img/gryphon.png) !important; }
      </style>';
    }
  add_action('login_head', 'custom_loginlogo');
