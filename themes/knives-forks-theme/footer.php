<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<img src="#" alt="footer image">
	<div class="site-info">
		<div>
			<h4>our story</h4>
			<p>We're a co-op</p>
			<p>our investments</p>
			<p>why we do it</p>
			<p>our team</p>
		</div>
		<div>
			<h4>how it works</h4>
			<p>show me</p>
		</div>
		<div>
			<h4>events</h4>
			<p>apply to pitch</p>
			<p>past events</p>
		</div>
		<div>
			<h4>contact us</h4>
		</div>
	</div>
	<!--.site-info -->
	<a href="<?php bloginfo('url') ?>"><img id="mobile-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo/knives-forks-logo.svg" alt="logo"><img class="hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo/footer-logo.svg" alt="logo"></a>
	<p class="copyright">&copy; <span>knives and forks community investment co-operative 2015 harness capital </span>develops, manages and operates investment co-ops.</p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>