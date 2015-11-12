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

/**
 * Google Tag Manager
 *
 */
add_action( 'tha_body_top', 'nectar7_gtm' );
function nectar7_gtm() {
	/* I think we have a plugin for this somewhere. We will move it to there whenever we are ready? Ok. */
	?>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W2WW4W"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W2WW4W');</script>
	<!-- End Google Tag Manager -->
	<?php
}

/**
 * Chat code JS 
 *
 */
add_action( 'tha_head_bottom', 'nectar7_chat_js' );
function nectar7_chat_js() {
	?>
	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3QTM9x4eKtsWWMq3RyePaAEVThayWclE";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->
	<?php
}

/**
 * WooCommerce Cart object in Menu
 *
 */
function get_woo_cart_menu() {
	global $woocommerce;
	if ( sizeof( $woocommerce->cart->cart_contents) > 0 ) :
		$item = sprintf( '<ul class="nav navbar-nav navbar-right"><li class="cartlink"><a href="%s">(%s) items <span class="shopping-cart-icon"></span></a></li></ul>', $woocommerce->cart->get_cart_url(), $woocommerce->cart->get_cart_contents_count() );
	else :
		$item = sprintf( '<ul class="nav navbar-nav navbar-right"><li class="cartlink"><a href="%s">(0) Items <span class="shopping-cart-icon"></span></a></li></ul>', $woocommerce->cart->get_cart_url() );
	endif;
	return $item;
}

/**
 * Top bar for newsletter
 *
 */
add_action( 'tha_header_before', 'n7_top_widget_bar' );
function n7_top_widget_bar() { ?>
	<div id="top-widget-bar" class="container-fluid hidden-xs hidden-sm">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php echo do_shortcode( '[gravityform id="3" title="false" description="true" ajax="true"]' ); ?>
			</div>
		</div>
	</div>
<?php }

//remove_filter( 'the_content', 'wpautop' );

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

//Remove add to cart from product archive

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

add_image_size( 'cart_item_image_size', 180, 180, true );
add_filter( 'woocommerce_cart_item_thumbnail', 'cart_item_thumbnail', 10, 3 );

function cart_item_thumbnail( $thumb, $cart_item, $cart_item_key ) {
 	 
 // create the product object 
 $product = get_product( $cart_item['product_id'] );
 return $product->get_image( 'cart_item_image_size' ); 
 
}

add_action( 'after_setup_theme', 'n7_register_science_menu' );
function n7_register_science_menu() {
	register_nav_menu( 'science', __( 'Science Menu', 'pgb' ) );
}

add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

function custom_pre_get_posts_query( $q ) {

	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;
	
	if ( ! is_admin() && is_shop() ) {
    // Don't display products in the 'subscribe' category on the shop page
		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'subscribe' ),
			'operator' => 'NOT IN'
		)));
	
	}

	remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

}

add_action('template_redirect', 'emptycart_redirect');
function emptycart_redirect(){
    global $woocommerce;
    
    $cartContent = sizeof( $woocommerce->cart->get_cart() );
	
    if( is_checkout() and $cartContent == 0 ) {
        $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );	
        wp_redirect( $shop_page_url ); 
        exit;
    }
}

/**
 * hook to woocommerce_sale_flash
 *
 * to remove Sales Flash
 * https://wordimpress.com/how-to-remove-product-sales-flash-in-woocommerce/
 */
add_filter('woocommerce_sale_flash', 'n7_hide_sales_flash');
function n7_hide_sales_flash() {
  return '';
}
