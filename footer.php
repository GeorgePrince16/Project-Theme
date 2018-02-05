    <head>
      <script type="text/javascript" src="/scripts/emailpage.js"></script>
    </head>
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
      <div>
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>
        <p><a id="back-top" href="#">Back to top</a></p>
      </div>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>