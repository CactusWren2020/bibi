<?php
/**
 * Search Page Custom
 */

 get_header();

?>

<div class="container-fluid mb-5">
<div class="row">
    <div class="col-sm-6 mx-auto">
    <header class="entry-header">
		<?php the_title( '<h3 class="entry-title my-5">', '</h3>' ); ?>
	</header><!-- .entry-header -->
        <?php get_search_form(); ?>
    </div>
</div>
</div>

<?php

 get_footer();
