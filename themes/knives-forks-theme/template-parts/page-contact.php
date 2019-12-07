
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

<h2>Looking for an opportunity? 
We’d love to hear from you. </h2> 

	</header><!-- .entry-header -->


    <section class="contact-page-info"> 

   <h3> Media Enquiries: </h3> 
   <p> info@knivesandforks.ca </p> 

   <h3> Find us on social media! </h3> 
   <span class="social-links">
							<p>
							<i class="fab fa-twitter"></i>	
                            <i class="fab fa-facebook"></i>	
							<i class="fab fa-linkedin-in"></i>							
							</p>
</span>

</section>



	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>


	</div><!-- .entry-content -->
</article><!-- #post-## -->