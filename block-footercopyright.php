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
			<div class="col-xs-6 col-sm-6 col-md-6 pull-right text-right">
				<div class="socialicons">
					<ul class="list-inline">
						<li class="twitter"><a href="http://www.twitter.com/nectarseven"></a></li>
						<li class="instagram"><a href="https://instagram.com/nectarseven"></a></li>
						<li class="facebook"><a href="http://www.facebook.com/nectarseven"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 pull-left">
				<div class="site-copyright">
					<?php echo pgb_get_option( 'footer_copyright_text', $default_copyright ); ?>
				</div><!-- close .site-info -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 disclaimertext">
				<p>*Statements have not been evaluated by the Food and Drug Administration.  These products are not intended to diagnose, treat, cure or prevent any disease.</p>
				<p>The information provided on this site is for informational purposes only and is not intended as a substitute for advice from your physician or other health care professional or any information contained on or in any product label or packaging.
				You should not use the information on this or the product described for diagnosis or treatment of any health problem or as a substitute for any prescription of any medication or other treatment.  
				You should consult with a health care professional before starting any supplementation program, before taking any medication, or if you have or suspect you might have a health problem.  You should not stop taking any medication without first consulting your physician.  
				<br/>This information and product is not recommended for women who are pregnant or children.   </p>
			</div>
		</div>
	</div><!-- close .container -->
	<?php tha_footer_bottom(); ?>
</footer><!-- close #colophon -->
<?php } ?>
