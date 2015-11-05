<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		
		
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-8 billingdetails">
				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
				<div class="col2-set" id="customer_details">
					<div class="col-1">
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
					</div>
		
					<div class="col-2">
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
				</div>
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
				
				<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>
				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>
				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4 testimonials" style="margin-top: 15px;">
				<h3>Happy Customers</h3>
				<blockquote>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/mark.jpg" class="img-responsive testimonial-image" />
					<p>After a number of doctor and dermatology visits, Mark had reached the end of his patience in the search for finding a cure for a condition that was both worsening. To make matters worst he faced a growing autoimmune disorder that seemed to evade doctors or, as he felt, "Doctors were not helping me with my growing concerns, weekend state or the condition of my physical body."</p>
					<p><a href="<?php echo get_bloginfo('url'); ?>/marks-story/">Read more of Mark's story</a></p>
					<footer>Mark M. San Diego, CA</footer>
				</blockquote>
				<blockquote>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/patty.jpg" class="img-responsive testimonial-image" />
					<p>I am a successful business woman running multiple global businesses as well as balancing a hectic schedule with two successful busy children. I travel with my daughter and son for sports weekly. I have also suffered from medical issues in the past year. I have had multiple episodes of blood clots. Since taking Niagen I have lost weight and become much more mobile with allows and aides in my recovery and helps me prevent immobility which wards off the blood clots. I also sleep soundly and have noticed a much more youthful look. Everyone who has not seen me since taking Niagen continues to ask what I'm doing because I look and feel so different from the last encounter they have had with me. Niagen has given me my life and youth back.</p>
					<footer>Patty S., Ohio</footer>
				</blockquote>
			</div>
		</div>
		

	<?php endif; ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
