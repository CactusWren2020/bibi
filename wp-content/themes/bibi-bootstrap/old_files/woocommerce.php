<?php

/**
 * The template for displaying Woocommerce Product
 * 
 * NOTE-----
 * This is normally in the root of the wp-bootstrap-starter theme
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
get_sidebar();
?>



<section id="primary" class="content-area 
    col-sm-8
    ">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <div id="main" class="site-main" role="main">

                    <?php woocommerce_content(); ?>

                </div><!-- #main -->
            </div>
        </div>
    </div>

</section><!-- #primary -->

<?php

get_footer();
