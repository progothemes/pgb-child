<?php
/**
 * Template Name: AboutUs Template
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

					<div class="col-md-12 main-content-inner2 aboutuspage">

						<div class="row">

							<?php //get_template_part( 'content', get_post_format() ); ?>
							<div class="entry-content main-entry-content col-md-12">
								<div class="row aboutushero about1">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
										<div class="herocaption">
											<h1>About Us</h1>
											<p>NECTAR7 is a global company that focuses on bringing life-enhancing, science-based nutrition and lifestyle supplements to the market. Our products are based in the latest scientific studies and breakthroughs for one reason: to give you a higher quality of life.</p>
										</div>
									</div>
								</div>
								<div class="row aboutushero about2">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
										<div class="herocaption">
											<p>Founded by a diverse team with backgrounds in business, finance, technology, science, distribution, and branding, NECTAR7 is proud to bring breakthrough products through exclusive relationships with leading innovators.</p>
										</div>
									</div>
								</div>
								<div class="alternatecols">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-4 eachCol">
											<div class="colcont">
												<h3>NECTAR7 Global</h3>
												<p>Global distribution for NECTAR7 products is handled by our team of leaders with over 35 years in retail experience.</p>
											</div>	
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 eachCol altCol">
											<div class="colcont">
												<h3>NECTAR7 Media</h3>
												<p>Advertising and online media services are delivered from our industry leading partners and alliances in all things digital.</p>
											</div>	
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 eachCol">
											<div class="colcont">
												<h3>NECTAR7 Beverage</h3>
												<p>Product development for growing trends in consumer beverage are delivered through our beverage division.</p>
											</div>		
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 eachCol altCol">
											<div class="colcont">
												<h3>NECTAR7 Wound &amp; Healing</h3>
												<p>Distribution and product relationships for latest innovations and technology are handled by our wound healing division.</p>
											</div>		
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 eachCol">
											<div class="colcont">
												<h3>NECTAR7 Research</h3>
												<p>Breakthroughs in formulation of life changing offerings are directed by our research teams located throughout the world.</p>
											</div>		
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 eachCol altCol">
											<div class="colcont">
												<h3>NECTAR7 Licensing Division</h3>
												<p>If you are interested in taking to market various products with NECTAR7, our license division is the team.</p>
											</div>		
										</div>
									</div>	
								</div>
								<div class="row aboutmission">
									<div class="col-xs-12 col-sm-7 col-md-7">
										<p>At NECTAR7, <strong>our goal</strong> is to help you perform the closest to your peak mental and physical capacities. Our products work at the cellular level to rejuvenate you and offer you the vibrant life you desire. Let us help fuel your fullest life!</p>
									</div>
								</div>
								<!--div class="row alttwocols">
									<div class="col-xs-12 col-sm-6 col-md-6 blueeight">
										<div class="textblock">
											<h4>Why NECTAR7?</h4>
											<p>In our lifetime we may never encounter a breakthrough that can enhance our daily performance and mental well being in under 8 hours. The most potent, life enhancing discovery of our lifetime . In 8 hours this process begins.</p>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 whitecol">
										<div class="textblock">
											<h4>Changing Lives</h4>
											<p>If you love someone… We all know people that are on diabetes, cancer and if we could add one more day of opportunity to there life experiences… Most of use are healthy but are we getting our maximum value. If you want to make a difference in live. Quality of life. I don’t think there is anything worse than feeling capable of something and you are doing the lower end. Even the people that are bumping along and they are holy moly. We want to connect people with a reason, we have a life enhancing ingredient which in itself drives personal performance both mentally & physically.</p>
										</div>	
									</div>
								</div>
								<div class="row alttwocols">
									<div class="col-xs-12 col-sm-6 col-md-6 walkblock">
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 colorCol">
										<div class="textblock">
											<h4>NECTAR7 (N7) Delivers Seven Vital</h4> 
											<h4>Mitochondrial Functions</h4>
											<ul>
											<li>+ Anti-Aging</li>
											<li>+ Enhanced Energy Levels</li>
											<li>+ Endurance</li>
											<li>+ Weight Management</li>
											<li>+ Cardiovascular Health</li>
											<li>+ Cognitive Health</li>
											<li>+ Protection vs Neurological Disease</li>
											</ul>
										</div>
									</div>
								</div-->
								<div class="row aboutproduct">
									<div class="col-xs-12 col-sm-6 col-md-7 textcol">
										<p>NECTAR7 specializies in performance-based nutrition for a healthy lifestyle. Backed by research from Harvard University and some of the world’s leading scientists, we sell performance-based nutrition supplements to help you experience life to the fullest.</p>
										<p><a href="<?php bloginfo('url'); ?>/nectar7-niagen/" class="btn btn-primary">LEARN MORE ABOUT NECTAR7 NIAGEN&reg;</a></p>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-5 thumbcol">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/nectar_and_niagen.png" class="img-responsove"/>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 aboutushero about3">
										<div class="row">
											<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
												<p>For strategic partnerships and relationships with NECTAR 7, both domestic and global, please contact us by calling 1-800-662-8617.</p>
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
