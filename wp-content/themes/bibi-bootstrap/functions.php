<?php 


function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
   wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap', false);	
   wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
	}
}
 

// woocommerce theme support for zoom, swipe, and lightbox

// function bibi_bootstrap_add_woocommerce_support() {
// 	add_theme_support('wc-product-gallery-zoom');
// 	add_theme_support('wc-product-gallery-lightbox');
// 	add_theme_support('wc-product-gallery-slider');
// }

// add_action('after_setup_theme', 'bibi_bootstrap_add_woocommerce_support', 9);


function override_parent_widgets () {
	unregister_sidebar('footer-1');
	unregister_sidebar('footer-2');
	unregister_sidebar('footer-3');
	unregister_sidebar('store-sidebar');

	register_sidebar( array(
        'name'          => esc_html__( 'Store Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'store_sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title small">',
        'after_title'   => '</h3>',
    ) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title small mt-5 mb-3">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title small mt-5 mb-3">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title small mt-5 mb-3">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'override_parent_widgets', 11 );

// Customize login screen

add_filter('login_headerurl', 'our_header_url');

function our_header_url() {
	return esc_url(site_url('/'));
}

// Load CSS for login screen


function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    
}

add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
// Custom title in login screen
//previously was login_headertitle

add_filter('login_headertext', 'our_login_title');

function our_login_title() {
	return get_bloginfo('name');
}

/* Nav */

//adding class to anchor links

function bibi_bootstrap_add_anchor_link_class($classes, $item, $args) {
	$classes['class'] = "underline nav-link";
	return $classes;
}

add_filter("nav_menu_link_attributes", "bibi_bootstrap_add_anchor_link_class", 1, 3);

// Woocommerce hooks

if ( class_exists( 'woocommerce')) {
			include_once 'includes/wc-modifications.php';
}

/*
* Creating a function to create our CPT
*/
 
 