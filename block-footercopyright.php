<?php
/**
 * Footer Copyright Area
 *
 */

$show_footer_copyright = pgb_get_option( 'footer_show_copyright', false );
$default_copyright = 'Copyright &copy; ' . date( 'Y' ) . ' - ' . get_bloginfo( 'name' );

if( !empty( $show_footer_copyright ) && '1' === $show_footer_copyright ) { ?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<?php tha_footer_top(); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 pull-right text-right">
				<div class="socialicons">
					<ul>
						<li class="twitter"><a href="http://www.twitter.com/nectarseven"></a></li>
						<li class="facebook"><a href="http://www.facebook.com/nectarseven"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 pull-left">
				<div class="site-copyright">
					<?php echo pgb_get_option( 'footer_copyright_text', $default_copyright ); ?>
				</div><!-- close .site-info -->
			</div>
		</div>
	</div><!-- close .container -->
	<?php tha_footer_bottom(); ?>
</footer><!-- close #colophon -->
<?php } ?>
