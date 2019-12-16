<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

<?php if(is_front_page()): ?>


<div>


<section class="support-container">
         <div>
     <h3 class="initiative-title">An initiative by:</h3>


     <div class="slowmoney-icon">

<img class="slow-money" src='<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-images/Slowmoney@2x.png' alt='slowmoney-icon' />
<div class="slowmoney-icon-bg"></div>
</div>
        </div>

<div>

<h3 class="supported-by-title">Generously supported by:</h3>


<div class="vancity-icon">

<img class="vancity" src='<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage-images/vancitylogo@3x.png' alt='vancity-icon' />
<div class="vancity-icon-bg"></div>
		</div>

<?php endif; ?>
		




</section>
        </div>

	<img class="cityline" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cityline/cityline.svg" alt="footer image">
	<div class="site-info">
		<div class="info-links">
			<div>
				<h4><a href="<?php echo get_permalink(); ?>">our story</a></h4>
				<p>We're <span>a</span> co-op</p>
				<p><a href="#investment">our investments</a></p>
				<p>why we do it</p>
				<p>our team</p>
			</div>
			<div>
				<h4><a href="<?php echo get_permalink(); ?>">how <span>it</span> works</a></h4>
				<p>show me</p>
			</div>
			<div>
				<h4><a href="<?php echo get_permalink(); ?>">events</a></h4>
				<p>apply <span>to</span> pitch</p>
				<p>past events</a></p>
			</div>
			<div>
				<h4><a href="<?php echo get_permalink(); ?>">contact us</a></h4>
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