<?php
/**
 * Template Name: Video Sales Template Niagen
 *
 * @package pgb
 */

get_header(); 

global $woocommerce;
$cart_url = $woocommerce->cart->get_cart_url();

?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">
		
		<?php tha_content_top(); ?>

		<?php // <!--The Loop ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

					<?php tha_entry_top(); ?>

					<div class="col-md-12 main-content-inner2 videosalespage">

						<div class="row">

							<?php //get_template_part( 'content', get_post_format() ); ?>
							<div class="entry-content main-entry-content col-md-12">
								<div class="row videobannercontainer">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
										<div class="videobanner">
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
													<h4>NECTAR7 gives you the power to do more.</h4>
													<h1>Are you ready to try a product that could potentially enable you to perform the closest to 100% of your mental and physical capabilities?</h1>
													<div class="videocontent">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/video_placeholder.png" height="360" width="640" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row refillproducts">
									<div class="col-xs-12">
										<h2><strong>Save up to 48%</strong> Plus <strong>Get Free Shipping</strong> on Your Orders with AutoRefills!</h2>
										<div class="row refillproductsrow">
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>NIAGEN&reg;
													<span>Get Started with 1 Bottle</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_single.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>$64.99</span></h5>
													<h4><span>NOW:</span> $45.00</h4>
													<h5>You Save $19.99 (30.76%)</h5>
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
													<h5>List Price: <span>194.97</span></h5>
													<h4><span>NOW:</span> $115.03</h4>
													<h5>You Save $79.94 (41%)</h5>
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
													<h5>LIST PRICE: <span>$259.96</span></h5>
													<h4><span>NOW:</span> $135.18</h4>
													<h5>YOU SAVE $124.78 (48%)</h5>
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
								<div class="row actiontape">
									<div class="col-xs-12 col-sm-12 col-md-4">
										<h2 class="ordercallout"><a href="callto: 1-800-662-8617"><span>Order by Phone or Ask Questions</span>1-800-662-8617</a></h2>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<h2 class="freedeliverycallout">FREE DELIVERY<span>On all AutoRefill Orders</span></h2>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GuaranteeVSL.png" class="img-responsive" />
									</div>
								</div>
								<div class="row heroproduct">
									<div class="col-xs-12">
										<div class="row pad30">
											<div class="col-xs-12 col-sm-4 col-md-4">
												<div class="productthumbcon">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/supplement_facts.png" class="img-responsive" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-8 col-md-8 heroproductcontent">
												<h1>NIAGEN&reg; (NAD+ ACTIVATOR)&reg;</h1>
												<h2>Cellular Energy &amp; Physical Performance* Nicotinamide Riboside</h2>
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6 pad30">
														<div class="productherobox">
															<h2>Supplement Facts</h2>
															<h4>Serving Size: <strong>2 Capsules</strong></h4>
															<h4>Servings Per Container: <strong>30</strong></h4>
															<h4>Amount Per Serving: <strong>% Daily Value*</strong></h4>
															<h3>Nicotinamide Riboside (NIAGEN&reg;) 250 mg</h3>
															<h4>*% Daily Value not established</h4>
															<h3 class="bordertopblk">Other Ingredients:</h3>
															<h4>Cellulose, Magnesium Vegetable Stearate.</h4>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-5 productherodesc pad30">
														<h2>Suggested Use:</h2>
														<p>As a dietary supplement, take two (2) capsules
															daily, on an empty stomach with a glass of water,
															or as directed by a healthcare professional.</p>
														<h3>No colors added. No artificial flavors.<br/>
															No preservatives. No yeast. Gluten free.</h3>
														<div class="note">
															<p>*These statements have not been evaluated
																by the Food and Drug Administration.
																This product is not intended to diagnose,
																treat, cure or prevent any disease.</p>
														</div>		
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12 leftmaincontent">
										<div class="row leftboxedcontent">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h4>Simply put, NECTAR7 gives you</h4>
														<h3>THE POWER TO DO MORE.</h3>
														<p>More time to be with the people you love. More energy to do the things you love doing.<br/>
														More strength to achieve your ambitions. More power to take in all that life has to offer.</p>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/video_sales_banner_bottom.jpg" alt="DNA graphic" width="1280" height="524" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		<?php endif; ?>

		<?php // The Loop--> ?>

		<?php // tha_content_bottom(); ?>
	
	</div>

<?php get_footer(); ?>
