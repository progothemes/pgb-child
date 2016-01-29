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
		<!-- <div class="row">
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
		</div> -->

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

			<!-- <?php woocommerce_product_loop_start(); ?>
			
				<?php woocommerce_product_subcategories(); ?>
			
				<?php while ( have_posts() ) : the_post(); ?>
			
					<?php wc_get_template_part( 'content', 'product' ); ?>
			
				<?php endwhile; // end of the loop. ?>
			
			<?php woocommerce_product_loop_end(); ?> -->

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

<?php get_footer( 'shop' ); ?>
