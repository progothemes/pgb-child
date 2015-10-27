<?php
/*  
 *  Template Name: Science Page Template
 * 
 * The template for displaying all pages.
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
						<div class="col-xs-12 page-heading science-heading">
							<h1 class="page-title">The Science & Research behind NECTAR7<?php //the_title(); ?></h1>
						</div>
					
					<div class="col-md-12">

						<div class="row">

							<div class="col-xs-12 col-sm-2 col-md-2 sc_sidebar">
								<div class="eachWidget">
									<ul>
										<li><a href="#">The Science</a></li>
										<li><a href="#">Why NAD+</a></li>
										<li><a href="#">Research</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-10 col-md-10 sc_sidebar">
								<div class="row fleximgrow docrow">
									<div class="col-xs-12 col-sm-7 col-md-6">
										<p>The pursuit of eternal life has long obsessed people of every class and culture.   Yet, while nothing and no one can truly promise “eternal”, science is finally closing in on the secrets of significantly extending life, while improving health and prolonging youthful vigor.</p>
										<p><strong>The secret is in NECTAR7 products that deliver what scientists and researchers have been searching for years to increase in the human body.</strong></p>
									</div>
									<div class="col-xs-12 visible-xs-block">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/science_section1.jpg" class="img-responsive aligncenter size-full" />
									</div>
								</div>
								<div class="row engrow">
									<div class="col-xs-12 col-sm-8 col-md-8">
										<h2>How does NECTAR7 work?</h2>
										<ol>
											<li>NAD+ "charges" mitochondria to fire with peak energy.</li>
											<li>Promotes youthful performance of mitochondria.</li>
											<li>“Fertilize" mitochondria to proliferate efficiently throughout the body.</li>
										</ol>
									</div>
								</div>
								<div class="row fleximgrow necrow">
									<div class="col-xs-12 col-sm-7 col-md-6">
										<p>The pursuit of eternal life has long obsessed people of every class and culture.   Yet, while nothing and no one can truly promise “eternal”, science is finally closing in on the secrets of significantly extending life, while improving health and prolonging youthful vigor.</p>
										<p><strong>The secret is in NECTAR7 products that deliver what scientists and researchers have been searching for years to increase in the human body.</strong></p>
									</div>
									<div class="col-xs-12 visible-xs-block">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/nectar7_bg.jpg" class="img-responsive aligncenter size-full" />
									</div>
								</div>
								<div class="row graphrow">
									<div class="col-xs-12 col-sm-8 col-md-8">
										<h2>Niagen taken daily can increase<br/> 
											youthful aging by increasing NAD+ levels</h2>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/with_niagen.jpg" class="img-responsive"/>
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/without_niagen.jpg" class="img-responsive"/>
									</div>
								</div>
								<div class="row textrow">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/mitochondria.jpg" class="img-responsive" />
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<p>In recent years, studies have revealed the role of mitochondria in protecting against a wide range of adverse health conditions.  Mitochondrial dysfunction has been implicated in a wide variety of metabolic, neurodegenerative and age-related diseases, including heart disease, diabetes, Alzheimer’s disease and certain types of cancer.</p>
									</div>
								</div>
								<div class="row textrow">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<h2>The benefits of NECTAR7</h2>
										<p>Several studies by respected universities have shown that replenishing the body’s lost NAD+ can effectively make mitochondria – and the cells they manage - younger in both appearance and performance.  View all Research.  In one landmark case, a Harvard Medical School professor of genetics, Dr. David Sinclair, reported that giving older mice an NAD+ booster for only a week made the mitochondria of two-year-old mice resemble those of six-month-old mice.  It’s the equivalent of a 60-year-old person’s mitochondria becoming more like those of a 20-year-old.</p>
										<p>A 2013 research shows NAD+ could be used to synchronize the body’s waking and sleeping cycles, theoretically providing a more sustained release of energy throughout the day. </p>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/david_sinclair.jpg" class="img-responsive" />
										<p>Further tests suggest that NAD+ can promote insulin sensitivity, encouraging healthy blood sugar levels. There are even indications that it can repair damaged DNA and thwart certain triggers for cancer, which often show up as cells age.</p>
									</div>
								</div>
								<div class="row fleximgrow nrrow">
									<div class="col-xs-12 col-sm-7 col-md-6">
										<h2>For the body to replenish its supply of NAD+, it requires a precursor known as nicotinamide riboside (NR).</h2>
									</div>
									<div class="col-xs-12 visible-xs-block">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/replenish.jpg" class="img-responsive aligncenter size-full" />
									</div>
								</div>
								<div class="row runnerrow">
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12">
												<p><strong>Dr. Carles Canto, a researcher at the Ecole Polytechnique Federale de Lausanne in Switzerland, has discovered that the NR enhances oxidative metabolism, protecting against high-fat, diet-induced obesity.  Calling NAD+ a “miracle molecule,” Canto declares that, “the effects of NR on metabolism are nothing short of astonishing.”</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-7">
												<p>NECTAR7 contains Niagen®, the first and only commercially available form of nicotinamide riboside (NR) that effectively increases NAD+ levels in the body.  It is a “no flush” form of vitamin B3 (niacin) that offers many health benefits, including endurance, performance, weight management, cardiovascular health, anti-aging, cognitive function and neuroprotection. </p>
												<h2>In a recent human study, a single dose of Niagen®, increased NAD+ by 33%. </h2>
												<p>NECTAR7 not only rewinds your body’s clock, it helps you hold on to your physical energy and mental alertness for much longer.  In effect, NECTAR7 gives you more time.  More time to enjoy your youth.  More time to achieve your goals.  More time get more out of life.</p>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-5">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/images/runner_girl_2.jpg" class="img-responsive aligncenter size-full" />
											</div>
										</div>
									</div>
								</div>
								<div class="row newsletterrow">
									<div class="col-xs-12">
										<h2>Discover for yourself.<br/> 
											Learn from our Research Center 
 											</h2>
 										<div class="row">
 											<div class="col-xs-12 col-sm-6 col-md-6">
 												<p>Every year, more and more breakthroughs about the NR in Niagen® are being made.  In 2003, there were 474 studies published; in 2013, there were 1,713.</p>
												<p>As time goes on, more benefits of this essential compound are being revealed by science.   With NECTAR7, you may very well live long enough to discover these many of these benefits for yourself. 
</p>
 											</div>
 											<div class="col-xs-12 col-sm-6 col-md-6 newslettercol">
 												<h2>Join our Newsletter to Stay up to Date with the Latest Research & Science Discoveries.</h2>
 												<form>
 													<h3>Join our Newsletter to Stay up to Date with the Latest Research & Science Discoveries. </h3>
 													<div class="form-group">
 														<input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter your email">
 													  	<input type="submit" class="btn btn-primary" value="NEWSLETTER SIGNUP" /> 
 													 </div>	
 												</form>
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

		<?php tha_content_bottom(); ?>
	
	</div>

<?php get_footer(); ?>
