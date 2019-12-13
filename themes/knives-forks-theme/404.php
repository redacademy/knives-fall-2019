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

			<section class="error-404 not-found">
				<header class="page-header">
				</header><!-- .page-header -->
				
				<div class="error-page-wrapper">

				<img class="error-img" src = '<?php bloginfo('template_directory'); ?>"/assets/404-images/404@2x.png"' alt = '404-picture' />

			
				<div class="error-message">
					<h3 class="error-message"><?php _e( 'Error 404 - Oh Dear... It looks like the page you were looking for cannot be found.' ); ?></h3>
					<p><?php _e( '' ); ?></p></div>


				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
