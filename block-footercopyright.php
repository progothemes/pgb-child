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
				<p>*These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease.</p>
				<p>DISCLAIMER: Results vary per individual, depending on the context of their circumstance and lifestyle. Testimonials on this site came from real customers who were not paid for their statements. However, each customer experience is unique and you may have an entirely dissimilar experience using the product.</p>
				<p>The information provided on this site is for informational purposes only and is not medical advice. You should not use the information on this site for diagnosis or treatment of any health problem nor as a substitute for any prescription medication or other treatment. You should consult with a healthcare professional before starting any supplementation program, before taking any medication, or if you have or suspect you might have a health problem. You should not stop taking any medication without first consulting your physician.  
				<br/>This information and product is not recommended for children or women who are pregnant.</p>
			</div>
		</div>
	</div><!-- close .container -->
	<?php tha_footer_bottom(); ?>
</footer><!-- close #colophon -->
<?php } ?>
