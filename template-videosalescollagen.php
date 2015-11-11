<?php
/**
 * Template Name: Video Sales Template Collagen
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
								<div class="row videobannercontainer collagen">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
										<div class="videobanner">
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
													<h4>NECTAR7 gives you the power to do more.</h4>
													<h1>Try a product that could potentially enable you to perform the closest to 100% of your mental and physical capabilities!</h1>
													<div class="videocontent">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/vsl_collagen_img.jpg" alt="NIAGEN&reg; &amp; COLLAGEN" width="640" height="360" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row refillproducts">
									<div class="col-xs-12">
										<h2><strong>FREE SHIPPING</strong> on all orders over $50.00!</h2>
										<div class="row refillproductsrow">
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>NIAGEN&reg; &amp; COLLAGEN
													<span>Get Started with 1 Bottle</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_single.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>$64.99</span></h5>
													<h4><span>NOW:</span> $46.99</h4>
													<h5>You Save $18.00 (27.69%)<br />&nbsp;</h5>
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
													<h5>List Price: <span>194.97</span></h5>
													<h4><span>NOW:</span> $115.62</h4>
													<h5>You Save $79.35 (40.69%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>cart/?add-to-cart=167" class="btn btn-primary"/>ADD TO CART</a>
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
													<h5>LIST PRICE: <span>$389.94</span></h5>
													<h4><span>NOW:</span> $211.50</h4>
													<h5>YOU SAVE $178.44 (45.76%)<br />FREE SHIPPING</h5>
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
								<div class="row actiontape">
									<div class="col-xs-12 col-sm-12 col-md-4">
										<h2 class="ordercallout"><a href="callto: 1-800-662-8617"><span>Order by Phone or Ask Questions</span>1-800-662-8617</a></h2>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<h2 class="freedeliverycallout">FREE DELIVERY<span>on all orders over $50.00</span></h2>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/guaranteevsl30.png" class="img-responsive" />
									</div>
								</div>
								<div class="row heroproduct collagen">
									<div class="col-xs-12">
										<div class="row pad30">
											<div class="col-xs-12 col-sm-4 col-md-4">
												<div class="productthumbcon">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/supplement_facts_collagen.png" class="img-responsive" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-8 col-md-8 heroproductcontent">
												<h1>NIAGEN&reg; &amp; COLLAGEN <span>(WITH HA "HYALURONIC ACID")</span></h1>
												<h2>Supports Radiant, Youthful, Younger Looking Skin*<br />
												<em>Promotes Lean Muscle Firmness*</em></h2>
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6 pad30">
														<div class="productherobox collagenbox">
															<h2>Supplement Facts</h2>
															<h4>Serving Size: <strong>4 Capsules per Day</strong></h4>
															<h4>Servings Per Container: <strong>30</strong></h4>
															<h4>Amount Per Serving: <strong>% Daily Value*</strong></h4>
															<h3>Nicotinamide Riboside (as NIAGEN&reg;) 100 mg</h3>
															<h3 class="notopborder">Hydrolyzed Fish Collagen 100 mg</h3>
															<h3 class="noborder">Hyaluronic Acid 50 mg</h3>
															<h3 class="bordertopblk">*% Daily Value not established</h3>
															<h3 class="noborder">Other Ingredients:</h3>
															<h4>Cellulose, Magnesium Vegetable Stearate.</h4>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-5 productherodesc pad30">
														<h2>Suggested Use:</h2>
														<p>As a dietary supplement, take two (2) capsules daily in morning and two (2) capsules in the evening, preferably with meals, or as directed by a healthcare professional.</p>
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
