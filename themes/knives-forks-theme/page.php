<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				if(is_page('contact-us')){
					while(have_posts()){
						the_post();
						get_template_part( 'template-parts/page','contact' );
					}
					
				}

				else{
					get_template_part( 'template-parts/content', 'page' ); 
				}
			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
