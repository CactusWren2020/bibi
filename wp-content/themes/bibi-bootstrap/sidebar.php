<?php

/**
 * 
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>
<aside id="secondary" class="widget-area" role="complementary">
	
				<?php dynamic_sidebar('store_sidebar'); ?>
	

</aside><!-- #secondary -->