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

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>
