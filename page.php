<?php get_header(); ?>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
          <!-- Create Dyanmic Blog Posts-->
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

          <div class="blog-post">
            <h1 class="blog-post-title">
              <?php the_title(); ?>       
            </h1>
            <?php the_content(); ?>
          </div><!-- /.blog-post -->

        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Pages at this time.'); ?></p>
        <?php endif; ?>

        <div class="back-to-top">
          <a href="#" class="back-to-top"></a>
        </div>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>
