<?php

/* Customize woocommerce shop */


add_action('template_redirect', 'load_template_layout');

function load_template_layout()
{
	// if is woocommerce shop, run these functions/modifications

	if (is_shop()) {

		//add container + row

		function open_container_row_div_classes()
		{
			echo "<div class='container-fluid mt-5'><div class='row'>";
		}

		add_action('woocommerce_before_main_content', 'open_container_row_div_classes', 1);

		//add opening tags for col-sm-4 (sidebar)

		function add_sidebar_container_opening()
		{
			echo "<div class='col-sm-3 px-5'>";
		}

		add_action('woocommerce_before_main_content', 'add_sidebar_container_opening', 2);

		//remove woocommerce sidebar and add in custom position

		remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
		add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 3);

		//add closing tags for col-sm-4 (sidebar)

		function add_sidebar_container_closing()
		{
			echo "</div>";
		}
		add_action('woocommerce_before_main_content', 'add_sidebar_container_closing', 4);

		//add opening tags for col-sm-8 (main content)

		function add_opening_tags_main_content()
		{
			echo "<div class='col-sm-9'>";
		}
		add_action('woocommerce_before_main_content', 'add_opening_tags_main_content', 5);

		// change to 4 products per row
 
		add_filter('loop_shop_columns', 'loop_columns', 999);
		if (!function_exists('loop_columns')) {
			function loop_columns()
			{
				return 4; // 4 products per row
			}
		}
		//add closing tags for col-sm-8 

		function add_closing_tags_main_content()
		{
			echo "</div";
		}
		add_action('woocommerce_after_main_content', 'add_closing_tags_main_content', 6);

		//close container and row div

		function close_container_row_div_classes()
		{
			echo "</div></div>";
		}

		add_action('woocommerce_after_main_content', 'close_container_row_div_classes', 5);

		//remove default 'Shop' title

		add_filter('woocommerce_show_page_title', 'toggle_page_title');

		function toggle_page_title($val)
		{
			$val = false;
			return $val;
		}

		//remove default item title
		remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');

		//add centered item title
		function woocommerce_centered_loop_product_title()
		{
			echo '<h2 class="' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title text-center')) . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}

		add_action('woocommerce_shop_loop_item_title', 'woocommerce_centered_loop_product_title');

		//remove price from shop

		remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

		//remove add to cart

		remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

		//remove breadcrumb

		remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

		//remove 'Showing all 10 results'

		remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

		//remove 'Default Sorting' dropdown

		remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
	} //end of if (is_shop) block

	//if it's single product page
	else if (is_product()) {
		//remove breadcrumb

		remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

		//remove categories

		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
	}
}




/* Single Product Mods single-product.php */


//enclose image + product info in container, pushing "related products" section beneath it

add_action('woocommerce_before_single_product_summary', 'woocommerce_add_containers_open_for_product', 15);

function woocommerce_add_containers_open_for_product()
{
	echo '<div class="container-fluid"><div class="row">';
}

add_action('woocommerce_after_single_product_summary', 'woocommerce_add_containers_close_for_product', 5);

function woocommerce_add_containers_close_for_product()
{
	echo '</div></div>';
}

//add class to single product title

// add_filter( 'woocommerce_product_loop_title_classes', 'custom_woocommerce_product_title_classes' );

// function custom_woocommerce_product_title_classes( $class ) {
// 	return $class . ' small'; 
// }

//add <hr/> after title

add_action('woocommerce_single_product_summary', 'woocommerce_add_hr', 6);

function woocommerce_add_hr()
{
	echo "<hr class='single-product-hr'/>";
}

// Remove the additional information tab
function woo_remove_product_tabs($tabs)
{
	unset($tabs['additional_information']);
	return $tabs;
}
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

// add_action( 'wp', 'tu_disable_wc_slider', 20 );
// function tu_disable_wc_slider() {
//     remove_theme_support( 'wc-product-gallery-slider' );
// }

// add_action( 'wp', 'tu_disable_wc_lightbox', 20 );
// function tu_disable_wc_lightbox() {
//     remove_theme_support( 'wc-product-gallery-lightbox' );
// }

//remove thumbnails undermain image
// remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );