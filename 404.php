<?php
/**
 * The template for displaying 404 errors.
 *
 * @package pgb
 */

//get_header(); ?>
	<style type="text/css">
		.page-heading{ padding:21px 34px; background: #004B7F linear-gradient(0deg, #6ECDF3,#004B7F) no-repeat center; }
		.page-heading:after{
			content:'¯\_(ツ)_/¯';
			display:block;
			font-size:5em;
			font-weight: 300;
			color:#FFF;
		}
		h1{ color: #FFF; }
		.entry-content{
			background-color: #FFF;
			padding: 21px 34px;
		}
	</style>
	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">

		<?php //tha_content_top(); ?>

		<div class="row">
			<div class="col-xs-12 page-heading">
				<h1 class="page-title">Page Not Found: <small>Error 404</small></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 entry-content">
				<p>Nothing can be found at this location. We hope you'll visit our <a href="/">homepage</a> or <a href="/contact-us/">contact us</a>.</p>
			</div>
		</div>

		<?php //tha_content_bottom(); ?>
	</div>
<?php //get_footer(); ?>
