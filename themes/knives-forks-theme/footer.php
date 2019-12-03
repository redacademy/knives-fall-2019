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
	<!-- <div class="site-info">
		<a href="<?php //echo esc_url('https://wordpress.org/'); 
					?>"><?php //printf(esc_html('Proudly powered by %s'), 'WordPress'); 
						?></a>
	</div>.site-info -->
	<a href="<?php bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/knives-forks-logo.svg" alt="logo"></a>
	<p class="copyright">&copy; <span>knives and forks community investment co-operative 2015 harness capital </span>develops, manages and operates investment co-ops.</p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>