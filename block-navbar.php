<?php
/**
* block-mainnav.php
*
* @return string
*/

$menuleftright = 'navbar-' . pgb_get_option('menu_align', 'left');
$fixed = pgb_get_option( 'nav_position', false );
$menustyle = '';
$datafix = '';

if ( 'fixed' === $fixed ) {
	$menustyle = 'navbar-fixed-top';
	$datafix = 'data-spy="affix" data-offset-top="0"';
}

$navbar_width = pgb_get_option( 'navbar_width', 'container' );
switch ($navbar_width) {
	case 'container-fluid':
		$menustyle = 'navbar-static-top';
		$navbar_width_inner = 'container';
		break;
	case 'full':
		$menustyle = 'navbar-static-top';
		$navbar_width_inner = 'container-fluid';
		break;
	case 'container':
	default:
		$menustyle = 'navbar-static-top';
		$navbar_width_inner = 'container-fluid';
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
<nav id="main-nav" class="navbar navbar-default site-navigation <?=$menustyle; ?> <?=$navbar_width; ?>" <?php echo $datafix; ?> >
	<div  class="<?=$navbar_width_inner; ?> nav-contain" role="navigation">
		<div class="navbar-header"> 
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Your site title as branding in the menu --> 
		</div>
		<div class="collapse navbar-collapse navbar-responsive-collapse">
			<?php // if ( '1' === pgb_get_option( 'nav_search' ) ) get_template_part( 'searchform', 'nav' ); // Show search form ?>
			<?php // Main Menu
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav navbar-nav '. esc_attr( $menuleftright ),
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			);
			?>
			<?php // Top Menu
			if ( has_nav_menu('secondary') )
				wp_nav_menu(
					array(
						'theme_location' => 'secondary',
						'container' => false,
						'menu_class' => 'nav navbar-nav visible-xs',
						'fallback_cb' => '',
						'menu_id' => 'top-menu',
						'walker' => new wp_bootstrap_navwalker()
					)
				);
			?>
			<?php // Cart Link
			if ( $cart_link ) : ?>
				<ul class="nav navbar-nav navbar-right">
					<li><?=$cart_link; ?></li>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<!-- .navbar --> 
</nav>
<!-- .site-navigation -->