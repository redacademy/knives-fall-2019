 <?php

/**
 * The template for displaying events page.
 *
 * @package RED_Starter_Theme
 */

get_header(); 

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main events-page" role="main">
		
	
		
		<div class="pitch-summary">
<?php
		// check if the repeater field has rows of data
		if( have_rows('pitch_summary') ): ?>

		<!-- <div class="pitch-summary-icons"> -->
			<?php // loop through the rows of data
			while ( have_rows('pitch_summary') ) : the_row(); ?>

			<section class="flex-item-container">
			<div class="summary-image"><img alt="Summary Icons" src="<?php the_sub_field('image'); ?>"/></div>
 
		<div><h3 class="summary-title"><?php the_sub_field('title'); ?></h3>
		<p class="summary-description"><?php the_sub_field('description'); ?></p></section>

				
				<!-- </div> -->

			<?php endwhile; ?>	
		

		</div>	
		<div class="apply-to-pitch-btn-green-flex"><button class="apply-to-pitch-btn-green btn">Apply To Pitch</button></div>
	 

		</section>

		<?php else :
		endif;
		?>


<?php 
$bg_color = get_field('video_background_color');
?>

		<section class="video-section" style="<?php echo  
		'background: linear-gradient(to bottom,' . '#fff' . ' 25%,' . $bg_color . ' 25%)'
		?>">


		<div class="embed-container">
			<?php the_field('video'); ?>
		</div>





				<!-- <source src="<?php // the_field('video'); ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video> -->
			<div class="video-bg"></div>
		</section> 


	
		<div class="past-events-wrapper">
		<section class="past-events-container"> 
		<h2 class="past-events-title">Past Events</h2>

		<?php
		if( have_rows('past_events') ): ?>

		<!-- <div class="past-event"> -->
			<?php // loop through the rows of data
			while ( have_rows('past_events') ) : the_row(); ?>
				<div class="past-event">

					<img class="past-event-image" alt="Event Image" src="<?php the_sub_field('image'); ?>"/>

					<div class="past-events-text">
						<h3 class="past-events-date"><?php the_sub_field('date'); ?></h3>
						<h3 class="past-events-location"><?php the_sub_field('location'); ?></h3>
						<p class="past-events-description"><?php the_sub_field('description'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : endif; ?>
		<!-- </div> -->
	</section>
	</div>


	</main>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?> 