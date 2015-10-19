<?php
/**
 * Template Name: Homepage Template
 *
 * @package pgb
 */

get_header(); ?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">
		
		<?php tha_content_top(); ?>

		<?php // <!--The Loop ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

					<?php tha_entry_top(); ?>

					<div class="col-md-12 main-content-inner2">

						<div class="row">

							<?php //get_template_part( 'content', get_post_format() ); ?>
							<div class="entry-content main-entry-content col-md-12">
								<div class="row xblue1 text-center border-bottom">
									<div class="col-md-8">
										<div class="row home-hero">
											<div class="col-xs-12 home-hero-caption">
												<h1>Can you still go the distance?</h1>
												<p>NECTAR7 delivers a patented formula that gets you increased performance both mentally and physically by increasing NAD+ in the body.</p>
											</div>
										</div>
										<div class="row hero-bottom">
											<div class="col-xs-12">
												<p>The pursuit of eternal life has long obsessed people of every class and culture.   Yet, while nothing and no one can truly promise “eternal”, science has made significant progress in significantly extending life, while improving health, preserving youthful vigor and prolonging active performance. <strong>The secret is in Nectar 7.</strong></p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="rightboxedcontent bluebox">
											<div class="row box-title">
												<div class="col-xs-12">
													<h2>Power For More Life</h2>
													<h3>NIAGEN (NAD + ACTIVATOR)</h3>
												</div>
											</div>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_bottle.png" class="img-responsive product-image" alt="NIAGEN (NAD + ACTIVATOR)"/>
											<p>Nectar 7 is created to let you live it up, no matter your age.  It is an optimized form of Niagen® that boosts your metabolism, improves cognitive health and reverses the effects of aging on the body and brain, so you can get the most out of every moment.</p>
											<a href="<?php bloginfo('url'); ?>/product/nectar-7/" class="btn btn-primary">LEARN MORE</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-sm-12 col-xs-12 border-md-right leftmaincontent">
										<div class="row leftboxedcontent">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h4>Simply put, Nectar 7 gives you</h4>
														<h3>THE POWER TO DO MORE.</h3>
														<p>More time to be with the people you love. More energy to do the things you love doing. More strength to achieve your ambitions. More power to take in all that life has to offer.</p>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/girl_runner.jpg" alt="DNA graphic" width="854" height="468" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent howdoesitwork">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-9 col-sm-10 col-xs-12">
														<h4>How does Nectar 7 work?</h4>
														<p>The science behind Nectar 7 is a newly-discovered chemical compound called Nicotinamide Adenine Dinucleotide (NAD+).</p>
														<p>NAD+ is a critical component of cell metabolism in all mammals, including humans.  It is the communication molecule between the cell nucleus and the cell’s energy factory, the mitochondria.  Also referred to as the cell’s powerhouse, mitochondria control many aspects of the cell cycle in terms of differentiation, growth and death.  They regulate important cell functions related to the convertion of fats, proteins and carbohydrates into energy. </p>
														<p>Researchers have found that as we age, the levels of NAD+ in our cells decrease, by a factor of 50% for every 20 years of life.  This leads to mitochondrial dysfunction and degraded cell metabolism.  This contributes to visible aging, diminished mental faculties and declining health.  Unfortunately, the age-related reduction in NAD+ levels happens to everyone, regardless of personal health, diet, or physical fitness.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent graphcontent">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/chart.png" alt="NAD+ vs Age Chart" class="img-responsive chartimage" />
														<p>In recent years, studies have revealed the role of mitochondria in protecting against a wide range of adverse health conditions.  Mitochondrial dysfunction has been implicated in a wide variety of metabolic, neurodegenerative and age-related diseases, including heart disease, diabetes, Alzheimer’s disease and certain types of cancer.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent benefitscontent">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="text-center">
															<h2>The benefits of <span>Nectar 7</span></h2>
															<p>Several studies by respected universities have shown that replenishing the body’s lost NAD+ can effectively make mitochondria – and the cells they manage - younger in both appearance and performance.  In one landmark case, a Harvard Medical School professor of genetics, Dr. David Sinclair, reported that giving older mice an NAD+ booster for only a week made the mitochondria of two-year-old mice resemble those of six-month-old mice.  It’s the equivalent of a 60-year-old person’s mitochondria becoming more like those of a 20-year-old.</p>
														</div>
														<ul>
															<li>A 2013 research shows NAD+ could be used to synchronize the body’s waking and sleeping cycles, theoretically providing a more sustained release of energy throughout the day.</li>  
															<li>Further tests suggest that NAD+ can promote insulin sensitivity, encouraging healthy blood sugar levels. There are even indications that it can repair damaged DNA and thwart certain triggers for cancer, which often show up as cells age.</li>
															<li>For the body to replenish its supply of NAD+, it requires a precursor known as nicotinamide riboside (NR).</li>
														</ul>	
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/benefits.jpg" alt="Benefits of Nectar 7" width="854" height="426" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent miraclecontent">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4 col-sm-5 col-xs-12">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/NAD+.png" alt="NAD+" class="img-responsive nad_miracle"/>	
													</div>
													<div class="col-md-8 col-sm-7 col-xs-12">
														<p><strong>Dr. Carles Canto</strong>, a researcher at the Ecole Polytechnique Federale de Lausanne in Switzerland, has discovered that the NR enhances oxidative metabolism, protecting against high-fat, diet-induced obesity.  Calling NAD+ a “miracle molecule,” Canto declares that, “the effects of NR on metabolism are nothing short of astonishing.” </p>	
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<p><strong>Nectar 7 contains Niagen®, the first and only commercially available form of nicotinamide riboside (NR) that effectively increases NAD+ levels in the body.  It is a “no flush” form of vitamin B3 (niacin) that offers many health benefits, including endurance, performance, weight management, cardiovascular health, anti-aging, cognitive function and neuroprotection. </strong></p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent graph2content">
											<div class="col-md-12">
												<div class="row bluehead">
													<div class="col-md-12">
														<h2>In a recent human study, a single dose of Niagen®, increased NAD+ by 33%</h2>	
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 text-center">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/chart.png" alt="NAD+ vs Age Chart" class="img-responsive chartimage" />
														<p>Nectar 7 not only rewinds your body’s clock, it helps you hold on to your physical energy and mental alertness for much longer.  In effect, Nectar 7 improves and extends your performance, giving you the power to do more and achieve more.</p>
													</div>													
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent benefits2content">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
														<div class="text-center">
															<h2>The Nectar <span>7 Promise</span></h2>
															<p>Nectar 7 sources its Niagen® from ChromaDex, the company that originally formulated and patented the compound.  Niagen® is approved by the FDA and has been tested to be safe, with no adverse side-effects.</p>
															<p>Every capsule of Nectar 7 is guaranteed to contain the optimal dose of Niagen®, ensuring your body enjoys the maximum benefits of health and youthful vitality.</p>
															<p class="text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/FDA.png" class="margintop30"/></p>
														</div>	
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent yellowbox">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h2>The Nectar <span>for yourself</span></h2>
														<p>Every year, more and more breakthroughs about the NR in Niagen® are being made.  In 2003, there were 474 studies published; in 2013, there were 1,713.</p>
														<p>As time goes on, more benefits of this essential compound are being revealed by science.   With Nectar 7, you may very well live long enough to discover these many of these benefits for yourself.</p>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/family.png" alt="family" width="854" height="474" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent productbox boxnavy">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8 col-sm-7 col-xs-12">
														<h1>Nectar 7</h1>
														<h2>Power For More Life </h2>
														<p>Nectar 7 is created to let you live it up, no matter your age.  It is an optimized form of Niagen® that boosts your metabolism, improves cognitive health and reverses the effects of aging on the body and brain, so you can get the most out of every moment.</p>
														<p><a href="<?php bloginfo('url'); ?>/product/nectar-7/" class="btn btn-primary">Learn More</a></p>
													</div>
													<div class="col-md-4 col-sm-5 col-xs-12 product-image-col">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_bottle.png" class="img-responsive product-image" alt="NIAGEN (NAD + ACTIVATOR)"/>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent productbox boxblue">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8 col-sm-7 col-xs-12">
														<h1>Nectar 7</h1>
														<h2>Power For 
															<br/>Strength & Beauty</h2>
														<p>Nectar 7 + Collagen combines Niagen® RX with collagen and hyaluric acid, creating a trifecta that turns back the clock on skin and muscle cells.  Collagen restores youthful suppleness to skin, brings luster back to hair, and strengthens joints and  muscles.  Meanwhile, the NAD+ generated by Niagen® prompts your body to generate even more collagen, fueling the biological processes that reverse the effects of aging to give you a potency and radiance that truly comes from deep within. </p>
														<p><a href="<?php bloginfo('url'); ?>/product/nectar-7-collagen/" class="btn btn-primary">Learn More</a></p>
													</div>
													<div class="col-md-4 col-sm-5 col-xs-12 product-image-col">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_collagen_bottle.png" class="img-responsive product-image" alt="NIAGEN (NAD + ACTIVATOR)"/>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12 border-bottom">
										<div class="rightboxedcontent lightbluebox">
											<div class="row box-title">
												<div class="col-xs-12">
													<h2>Power For Strength & Beauty</h2>
													<h3>NIAGEN & COLLAGEN</h3>
												</div>
											</div>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_collagen_bottle.png" class="img-responsive product-image" alt="NIAGEN & COLLAGEN"/>
											<p>Nectar 7 + Collagen combines Niagen® RX with collagen and hyaluric acid, creating a trifecta that turns back the clock on skin and muscle cells.  Collagen restores youthful suppleness to skin, brings luster back to hair, and strengthens joints and  muscles.  Meanwhile, the NAD+ generated by Niagen® prompts your body to generate even more collagen, fueling the biological processes that reverse the effects of aging to give you a potency and radiance that truly comes from deep within.</p>
											<a href="#" class="btn btn-primary">LEARN MORE</a>
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

		<?php// tha_content_bottom(); ?>
	
	</div>

<?php get_footer(); ?>
