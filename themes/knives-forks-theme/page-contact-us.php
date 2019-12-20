<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('contact-wrapper'); ?>>
				<header class="entry-header-contact">

					<!-- add a comment to test deploy -->


				</header><!-- .entry-header -->

				<h2 class="contact-opportunity">Looking for an opportunity? <br>
					We’d love to hear from you. </h2>
				<div class="entry-content-contact">

					<!-- //TO DO make a custom field to make it dynamic later// -->



					<section class="contact-form-container">
						<?php the_content(); ?>

						<div class="media-enquiries">

							<h3> Media Enquiries: </h3>
							<p> info@knivesandforks.ca </p>


							<h3> Find us on social media! </h3>
							<div class="social-links">
								<ul class="social-icons">
									<li><a href="https://twitter.com/knivesforkscoop?lang=en" id="twitter-link"><i class="fab fa-twitter"></a></i></li>
									<li><a href="https://www.facebook.com/knivesandforkscoop/" id="facebook-link"><i class="fab fa-facebook-f"></i></a></li>    
									<li><a href="https://www.linkedin.com/company/knives-and-forks-community-investment-co-op/?viewAsMember=true" id="linkedin-link"><i class="fab fa-linkedin-in"></a></i></li>
								</ul>
							</div>

						</div><!-- .media-queries -->

					</section>



					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">' . esc_html('Pages:'),
							'after'  => '</div>',
						));
						?>


				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php endwhile; ?>




	</main><!-- #main -->
</div><!-- #primary -->

<?php //get_sidebar(); 
?>
<?php get_footer(); ?>