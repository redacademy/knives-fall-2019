<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
				<header class="page-header">
				</header><!-- .page-header -->

				<section class="error-404 not-found">
				
				<div class="error-page-container">
					<section class="error-404-image">

				<img class="error-img" src='<?php echo get_stylesheet_directory_uri(); ?>/assets/404-images/404.svg' alt='404-picture' /></section>

			

			
				<div class="error-message-container">
					<p class="error-message"><span>Error 404</span> &mdash; Oh dear... It looks like the page you were looking for cannot be found.</p></div>

					<div class="error-btn-container">

					<a class="btn btn-wide home" href="#">Home</a></div>
				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
