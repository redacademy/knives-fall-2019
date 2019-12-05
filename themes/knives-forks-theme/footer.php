<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<img class="cityline" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cityline/cityline.svg" alt="footer image">
	<div class="site-info">
		<div class="info-links">
			<div>
				<h4>our story</h4>
				<p>We're <span>a</span> co-op</p>
				<p>our investments</p>
				<p>why we do it</p>
				<p>our team</p>
			</div>
			<div>
				<h4>how <span>it</span> works</h4>
				<p>show me</p>
			</div>
			<div>
				<h4>events</h4>
				<p>apply <span>to</span> pitch</p>
				<p>past events</p>
			</div>
			<div>
				<h4>contact us</h4>
			</div>
		</div><!-- end of .info-links -->
		<div class="subscribe">
			<h5>Join our mailing list and never miss an update!</h5>
			<form method="post" class="email-form">
				<input type="email" placeholder="example@email.ca" name="user-email" class="email-field" size="40">
				<input type="submit" value="Subscribe" class="sub-btn">
			</form>
			<p>This document is provided for informational purposes only as of the date hereof and does not constitute an offer to sell or a solicitation of an offer to buy securities and may not be relied upon in connection with any offer or sale of securities. This document is not a prospectus or an advertisement, and the offering is not being made to the public.</p>
		</div><!-- end of subscribe -->
		<div class="logo-container">
			<a href="<?php bloginfo('url') ?>"><img id="mobile-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo/knives-forks-logo.svg" alt="logo" class="hide mobile-logo"><img class="hide desktop-logo" id="desktop-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo/footer-logo.svg" alt="logo"></a>
			<p class="copyright">&copy; <span>knives and forks community investment co-operative 2015 harness capital </span>develops, manages and operates investment co-ops.</p>
		</div> <!-- end of logo-container -->
	</div>
	<!--.site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>