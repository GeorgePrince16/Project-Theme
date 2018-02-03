    <footer class="blog-footer">
      <!-- https://www.tipsandtricks-hq.com/how-to-add-widgets-to-wordpress-themes-footer-1033 -->
      <div id="footer-sidebar">
        <div class="col-md-8">
          <?php if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
          } ?>
          <?php wp_nav_menu( array('theme_location' => 'footer-menu')); ?>
        </div>
        <div class="col-md-4">
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
