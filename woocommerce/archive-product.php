<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
		<style type="text/css">
		.page-heading h1{
		    padding-top:.57em;
		}
		h2 {
		    margin:1em 0 .5em;
		    font-size:40px;
		    text-transform:initial;
		    font-weight:normal;
		    color:#333;
		}
		h2 .lead{
		    font-size:inherit;
		    font-weight:600;
		    color:#1946bb;
		}
		.page-intro{
		    margin-bottom:-2.5em;
		}
		.page-intro ul{
		    list-style-position:inside;
		    padding-left:0;
		    font-size:1.2em;
		    letter-spacing:.05em;
		    text-transform:uppercase;
		}
		.page-intro li{ padding:.5em 0; margin:0 2.5em 0 0; }
		.page-intro ul li:nth-child(odd){ float:left; clear:both; width:14em; }
		.page-intro ul li:nth-child(even){ margin-left:15.8em; }
		</style>
		<div class="row">
			<div class="col-xs-12 page-heading store-heading">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<h1 class="page-title">STORE</h1>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/guarantee-store1.png" class="img-responsive guarantee-image" alt="100% Money Back Guarantee for a full 30 days - no questions asked" />
					</div>
				</div>
			</div>
			<div class="col-xs-12 page-intro">
				<h2><span class="lead">NECTAR7 Niagen</span> goes to work on improving:</h2>
				<ul>
					<li>Energy &amp; Vitality*</li>
					<li>Mental Clarity*</li>
					<li>Fatigue & Depression*</li>
					<li>Overall Mood*</li>
				</ul>
			</div>
		</div>

		<?php /*if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; */ ?>

		<?php
			/**
			 * woocommerce_archive_description hook
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );

    global $woocommerce;
    $cart_url = $woocommerce->cart->get_cart_url();
	?>
		<!-- MODAL NIAGEN-->
						<div class="modal fade modalproducts" id="modal-74" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-body videosalespage">
		       	 				<div class="row refillproducts">
									<div class="col-xs-12">
										<h2><strong>FREE SHIPPING</strong> on all orders over $50.00!</h2>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<div class="row refillproductsrow">
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>NIAGEN&reg;
													<span>Get Started with 1 Bottle</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_single.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>$64.99</span></h5>
													<h4><span>NOW:</span> $46.99</h4>
													<h5>You Save $18.00 (27.69%)<br />&nbsp;</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_30" id="refilltype_30_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_30" id="refilltype_30_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=74" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct mostPopular">
												<h3>NIAGEN&reg; (90 DAY)
													<span>Most Popular</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_popular.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>$194.97</span></h5>
													<h4><span>NOW:</span> $115.62</h4>
													<h5>You Save $79.35 (40.69%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=97" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>NIAGEN&reg; (180 DAY)
													<span>Best Value</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_best_value.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>LIST PRICE: <span>$389.94</span></h5>
													<h4><span>NOW:</span> $211.50</h4>
													<h5>YOU SAVE $178.44 (45.76%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_180" id="refilltype_180_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_180" id="refilltype_180_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=98" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>
											</div>
										</div>
									</div>
								</div>
						      </div>
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

		<!-- MODAL COLLAGEN-->
					<div class="modal fade modalproducts" id="modal-75" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-body videosalespage">
		       	 				<div class="row refillproducts">
									<div class="col-xs-12">
										<h2><strong>FREE SHIPPING</strong> on all orders over $50.00!</h2>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<div class="row refillproductsrow">
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>NIAGEN&reg; &amp; COLLAGEN
													<span>Get Started with 1 Bottle</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_single.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>$65.99</span></h5>
													<h4><span>NOW:</span> $47.99</h4>
													<h5>You Save $18.00 (27.28%)<br />&nbsp;</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_30" id="refilltype_30_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_30" id="refilltype_30_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=75" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct mostPopular">
												<h3>NIAGEN&reg; &amp; COLLAGEN<br />(90 DAY)
													<span>Most Popular</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_popular.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>197.97</span></h5>
													<h4><span>NOW:</span> $118.62</h4>
													<h5>You Save $79.35 (40.08%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=167" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>NIAGEN&reg; &amp; COLLAGEN<br />(180 DAY)
													<span>Best Value</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_best_value.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>LIST PRICE: <span>$395.94</span></h5>
													<h4><span>NOW:</span> $217.50</h4>
													<h5>YOU SAVE $178.44 (45.07%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_180" id="refilltype_180_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_180" id="refilltype_180_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=168" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>
											</div>
										</div>
									</div>
								</div>
						      </div>
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
<?php get_footer( 'shop' ); ?>
