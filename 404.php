<?php
/**
 * The template for displaying 404 errors.
 *
 * @package pgb
 */

get_header(); ?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">

		<?php //tha_content_top(); ?>
		<div class="row">
			<div class="col-xs-12 page-heading">
				<h1 class="page-title">Error 404: <?php the_title(); ?></h1>
			</div>
		</div>
		<p>Nothing can be found at this location. We hope you'll visit our <a href="/">homepage</a> or <a href="">contact us</a>.</p>
		<?php //get_search_form(); ?>

		<?php //tha_content_bottom(); ?>
	</div>
<?php get_footer(); ?>
