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
		
		<style>
			.events-banner {
				background: url('<?php the_field("events_page_banner_image"); ?>') no-repeat center center/cover;
				height: 100vh;
			}
		</style>
	<!-- <section class="events-banner">
	
	
	<section class="events-banner">
	<section class="upcoming-events">
		<h1 class="upcoming-events-title">
			<?php //the_field('upcoming_event_title'); ?>
			</h1>
			<h2 class="upcoming-events-location">
				<?php //the_field('upcoming_event_location'); ?>
			</h2>	
		</section> 

			<section class="banner-links"> 
		<button class="buy-tickets-btn">Buy Tickets</button>
			<button class="apply-to-pitch-btn">Apply To Pitch</button>
	

	</section> 
		</section> -->
		
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
		<div class="apply-to-pitch-btn-green-flex"><button class="apply-to-pitch-btn-green">Apply To Pitch</button></div>
	 

		</section>

		<?php else :
		endif;
		?>

		<section class="video-section">
	<video controls poster="<?= get_template_directory_uri(); ?>/assets/events-images/event-video@3x.png">

				<source src="<?php the_field('video'); ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<div class="video-bg"></div>
		</section> 


<section class="past-events-container"> 
<h2 class="past-events-title">Past Events</h2>
<div> 
		<?php
		if( have_rows('past_events') ): ?>

		<div class="past-event">
			<?php // loop through the rows of data
			while ( have_rows('past_events') ) : the_row(); ?>
			<img class="" alt="Event Image" src="<?php the_sub_field('image'); ?>"/>
			<h3 class="past-events-date"><?php the_sub_field('date'); ?></h3>
			<h3 class="past-events-location"><?php the_sub_field('location'); ?></h3>
			<p class="past-events-description"><?php the_sub_field('description'); ?></p>
			<?php endwhile; ?>
		
		<?php else :
		endif;
		?>
		</div>
		<div class="past-events-bg"></div>

	</section>


	</main>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?> -->