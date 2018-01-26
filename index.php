<?php get_header(); ?>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
          <!-- Create Dyanmic Blog Posts-->
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts at this time.'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2017</a></li>
              <li><a href="#">February 2017</a></li>
              <li><a href="#">January 2017</a></li>
              <li><a href="#">December 2016</a></li>
              <li><a href="#">November 2016</a></li>
              <li><a href="#">October 2016</a></li>
              <li><a href="#">September 2016</a></li>
              <li><a href="#">August 2016</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>
