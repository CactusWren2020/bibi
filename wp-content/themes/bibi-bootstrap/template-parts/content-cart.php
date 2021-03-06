<?php

/**
 * Template part for displaying cart content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!-- 
<div class="container-fluid my-5">
     <div class="row"> 
        <div class="col"> 
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title" id="cart-header">', '</h1>'); ?>
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

            <?php if (get_edit_post_link()) : ?>

        </div>
    </div>
</div> -->

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