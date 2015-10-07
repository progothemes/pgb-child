<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

echo '<div class="productaddtocart">';
/* Lets believe we have only simple products */
?>

<form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
		
	<?php woocommerce_quantity_input(); ?>
		
	<button type="submit" class="btn btn-primary"><?php echo esc_html( $product->add_to_cart_text() ); ?></button>
		
</form>
<?php		
/*
echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="btn btn-primary %s product_type_%s">%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
		esc_attr( $product->product_type ),
		esc_html( $product->add_to_cart_text() )
	),
$product );
 */
echo '<p><img src="'.get_bloginfo('stylesheet_directory').'/images/card_small.png" class="cardseal img-responsive"/></p>';
echo '</div>';
