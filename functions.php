<?php

/**
 * pgb-child functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_styles' );
function pgb_child_enqueue_styles() {
    wp_enqueue_style( 'pgb', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'pgb-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300,300italic' );
}

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_scripts' );
function pgb_child_enqueue_scripts() {
    wp_enqueue_script( 'nectar7-js', get_stylesheet_directory_uri() . '/includes/js/nectar7.js', array('jquery') );
}


function get_woo_cart_menu() {
	global $woocommerce;
	if ( sizeof( $woocommerce->cart->cart_contents) > 0 ) :
		$item = sprintf( '<ul class="nav navbar-nav navbar-right"><li class="cartlink"><a href="%s">(%s) items <span class="shopping-cart-icon"></span></a></li></ul>', $woocommerce->cart->get_checkout_url(), $woocommerce->cart->get_cart_contents_count() );
	else :
		$item = sprintf( '<ul class="nav navbar-nav navbar-right"><li class="cartlink"><a href="%s">(0) Items <span class="shopping-cart-icon"></span></a></li></ul>', $woocommerce->cart->get_checkout_url() );
	endif;
	return $item;
}

remove_filter( 'the_content', 'wpautop' );

//Disabled Jumbotron

remove_action( 'pgb_block_navbar', array( 'ProBlogger_Partials', 'problogger_jumbotron'), 20 );

//Remove result count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
//Remove Default sorting
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

//Remove pricing and rating
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

//Remove sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


add_image_size( 'cart_item_image_size', 180, 180, true );
add_filter( 'woocommerce_cart_item_thumbnail', 'cart_item_thumbnail', 10, 3 );

function cart_item_thumbnail( $thumb, $cart_item, $cart_item_key ) {
 	 
 // create the product object 
 $product = get_product( $cart_item['product_id'] );
 return $product->get_image( 'cart_item_image_size' ); 
 
}


