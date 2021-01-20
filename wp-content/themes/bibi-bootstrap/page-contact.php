<?php


/**
 * Template Name: Contact_Page 
 *
 */

get_header(); ?>

	<section id="contact" class="content-area col-sm-12 col-lg-8 mx-auto pt-5">
		<div id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
