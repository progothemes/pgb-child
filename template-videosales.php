<?php
/**
 * Template Name: Video Sales Template Niagen
 *
 * @package pgb
 */

// inject js_composer js & css for toggle FAQs and such
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style( 'js_composer_front' );

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
													<h4>NECTAR7 NIAGEN&reg; gives you the power to do more.</h4>
													<h1>Are you ready to try a product that could potentially enable you to perform the closest to 100% of your mental and physical capabilities?</h1>
													<div class="videocontent">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/vsl_niagen_img.jpg" alt="NECTAR7 gives you the power to do more." width="640" height="360" />
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
                <div class="row pdesc">
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                    <p>NECTAR7 Niagen&reg; is for people intent on performing the closest to 100% of their mental and physical capabilities. Awarded five worldwide patents, NECTAR7 Niagen&reg; is the first and only commercially available form of (NR) in the world today. Clinically shown to boost NAD levels by 30 percent in humans after just one dosage*, NECTAR7 Niagen&reg; is for people who want to increase endurance and energy, while benefiting from heightened cognitive function, including concentration, focus and memory. Before you age another day, try NECTAR7 Niagen&reg;.</p>
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
                <div class="row productfaqs">
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <h3>FAQ's</h3>
                    <div id="1447309144105-8601f8c9-013b" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>WHAT IS NECTAR7 NIAGEN®?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>A form of vitamin B3 that our bodies readily convert to nicotinamide adenine dinucleotide or NAD+.</p>
                    </div>
                    </div>
                    <div id="1447309185132-ba82cd8d-13e5" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW SHOULD I USE NECTAR7 NIAGEN®?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Daily. As a dietary supplement, take two (2) capsules daily, on an empty stomach with a glass of water, or as directed by a healthcare professional.</p>
                    </div>
                    </div>
                    <div id="1447309245044-08fa37ab-aff2" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW DO I KNOW IF NECTAR7 NIAGEN® IS RIGHT FOR ME?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Simply, if you are interested in living well. We all experience declining levels of NAD+ as we age. Since adequate NAD+ levels are critical to the most important cellular processes such as energy production, steroid synthesis and DNA repair it is easy to understand that keeping our NAD+ levels up will promote wellness throughout life.</p>
                    </div>
                    </div>
                    <div id="1447309244695-ce8ff6f4-0dab" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW MANY SERVINGS OF NECTAR7 NIAGEN® SHOULD I TAKE PER DAY?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Take two (2) capsules daily or 250Mg per day.</p>
                    </div>
                    </div>
                    <div id="1447309244387-a458cd5e-1f9a" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>WHAT ARE THE BEST TIMES TO TAKE NECTAR7 NIAGEN®?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Whenever it is most convenient in your daily routine as it is not highly time-sensitive. Simply taking it consitently is the key to maximizing its benefits</p>
                    </div>
                    </div>
                    <div id="1447309244005-52dbaa79-6cc9" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>CAN I TAKE NECTAR7 NIAGEN® ON AN EMPTY STOMACH?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Yes. You can take NECTAR7 Niagen® on an empty stomach.</p>
                    </div>
                    </div>
                    <div id="1447309243646-48cb0c7f-2c99" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HAS NECTAR7 NIAGEN® BEEN APPROVED BY THE FDA?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>No dietary supplement is “approved” by the FDA. They are, however, stringently regulated and must comply with the provisions of the Dietary Supplement Health and Education Act as regulated by the FDA. NECTAR7 Niagen® is in 100% compliance with the provisions of the Dietary Supplement and Education Act as regulated by the FDA.</p>
                    </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="row productfaqs">
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div id="1447309144105-8601f8c9-013b" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>RESEARCH CITATIONS</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><ol>
                        <li><a href="http://publications.nigms.nih.gov/insidethecell/chapter5.html" target="_blank">http://publications.nigms.nih.gov/insidethecell/chapter5.html</a></li>
                        <li><a href="http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714" target="_blank">http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714</a></li>
                        <li><a href="https://hms.harvard.edu/news/genetics/new-reversible-cause-aging-12-19-13" target="_blank">https://hms.harvard.edu/news/genetics/new-reversible-cause-aging-12-19-13</a></li>
                        <li><a href="http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714" target="_blank">http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714</a></li>
                        <li><a href="http://healthland.time.com/2013/12/19/reversing-aging-not-as-crazy-as-you-think/" target="_blank">http://healthland.time.com/2013/12/19/reversing-aging-not-as-crazy-as-you-think/</a></li>
                      </ol>
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
