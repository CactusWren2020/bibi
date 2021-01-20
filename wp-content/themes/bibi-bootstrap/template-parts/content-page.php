<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-8">
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title mb-5">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-bootstrap-starter'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div><!-- .entry-content -->


            </div>
            <div class="col-sm-4">
                <!-- <img class="img-fluid" src="http://127.0.0.1/bibi/wp-content/uploads/2021/01/bibi2.jpg"/> -->
            </div>
        </div>
    </div>
    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Name of current post */
                    esc_html__('Edit %s', 'wp-bootstrap-starter'),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>