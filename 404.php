<?php

		get_header(); ?>

			<section class="error-404">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Whoops! Look like you have got yourself lost!'); ?></h1>
				</header><!-- .page-header --> 

				<!-- Change to simple 404 image replacing the 0 with cricket ball -->

				<img align="middle" id="image-404" src="<?php echo get_stylesheet_directory_uri(); ?>/img/404-lost-ball">

				<br>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Try the search down below or head back to home.'); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
				<div class="back-to-top">
          			<a href="#" class="back-to-top"></a>
        		</div>
			</section><!-- .error-404 -->

<?php get_footer(); ?>