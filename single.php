<?php
/**
 * The Template for displaying all single posts.
 *
 * @package pgb
 */

get_header(); ?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php tha_entry_before(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

				<?php tha_entry_top(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php get_template_part( 'posts', 'footer' ); ?>

				<?php tha_entry_bottom(); ?>

			</article><!-- #post-## -->

			<?php tha_entry_after(); ?>

			<?php pgb_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>