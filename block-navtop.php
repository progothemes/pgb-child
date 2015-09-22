<?php
/**
* block-navtop.php
*
* The NavTop block is visible on SM and larger screen sizes.On XS screens, menu items are moved into main nav.
*
* @return string
*/
$menuleftright = 'navbar-' . pgb_get_option('menu_align', 'left');
$fixed = pgb_get_option( 'topnav_position', 'static' );
$topmenustyle = '';
$datafix = '';

if ( 'fixed' === $fixed ) {
	$topmenustyle = 'navbar-fixed-top';
	$datafix = 'data-spy="affix" data-offset-top="134"';
}

$topnav_width = pgb_get_option( 'topnav_width', 'container' );
switch ($topnav_width) {
	case 'container-fluid':
		$topmenustyle = 'navbar-static-top';
		$topnav_width_inner = 'container';
		break;
	case 'full':
		$topmenustyle = 'navbar-static-top';
		$topnav_width_inner = 'container-fluid';
		break;
	case 'container':
	default:
		$topnav_width_inner = 'container-fluid';
		break;
}

$cart_link = false;
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	global $woocommerce;
	// get cart quantity
	$cart_qty = $woocommerce->cart->get_cart_contents_count();
	// get cart total
	$cart_total = $woocommerce->cart->get_cart_total();
	// get cart url
	$cart_url = $woocommerce->cart->get_cart_url();
	// if multiple products in cart
	if ( $cart_qty > 1 )
		$cart_link = '<a href="'.$cart_url.'">('.$cart_qty.') items <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>';

	// if single product in cart
	if ( $cart_qty == 1 )
		$cart_link = '<a href="'.$cart_url.'">('.$cart_qty.') item <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>';
}


?>
<nav id="top-nav" class="navbar navbar-inverse site-navigation hidden-xs <?=$topmenustyle; ?> <?=$topnav_width; ?>" <?php echo $datafix; ?> >
	<div  class="<?=$topnav_width_inner; ?> nav-contain" role="navigation">
		<div class="navbar-inner">
			<?php if( '1' === pgb_get_option( 'nav_search' ) ) get_template_part( 'searchform', 'nav' ); // Show search form ?>
			<?php // Main Menu
			wp_nav_menu(
				array(
					'theme_location' => 'secondary',
					'container' => false,
					'menu_class' => 'nav navbar-nav '. esc_attr( $menuleftright ),
					'fallback_cb' => '',
					'menu_id' => 'top-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			);
			?>
			<?php //if ( $cart_link ) : ?>
				<ul class="nav navbar-nav navbar-right">
					<li><?=$cart_link; ?></li>
				</ul>
			<?php //endif; ?>
		</div>
	</div>
</nav>