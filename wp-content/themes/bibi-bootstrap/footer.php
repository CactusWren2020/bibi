<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
	
		</div> 
	</div><!-- #content -->


	<div class="container-fluid px-5">
		<?php get_template_part( 'footer-widget' ); ?>
	
		<footer id="colophon" class="site-footer mt-5
		<?php //echo wp_bootstrap_starter_bg_class(); ?>
		" role="contentinfo">
			<!-- <div class="container pt-3 pb-3"> (dropped to eliminate padding)-->
				<div class="site-info text-uppercase primary-color">
					&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					<span class="sep"> | </span>
					<a class="credits" href="https://mikecho.dev" target="_blank" title="Mike Cho, Wordpress Developer"><?php echo esc_html__('Mike Cho, Developer','wp-bootstrap-starter'); ?></a>

				</div><!-- close .site-info -->
			<!-- </div> -->
		</footer><!-- #colophon -->
	</div> <!--container-->
	<?php endif; ?>
</div><!-- #page -->


<?php wp_footer(); ?>
</body>
</html>