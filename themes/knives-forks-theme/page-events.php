<?php

/**
 * The template for displaying events page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main events-page" role="main">
		
		<style>
			.events-banner {
				background: url('<?php the_field("events_page_banner_image"); ?>') no-repeat center center/cover;
				height: 100vh;
			}
		</style>
	
	<section class="events-banner">
	<section class="upcoming-events">
		<h1 class="upcoming-events-title">
			<?php the_field('upcoming_event_title'); ?>
			</h1>
			<h2 class="upcoming-events-location">
				<?php the_field('upcoming_event_location'); ?>
			</h2>
			<div class="banner-links">
			<button class="buy-tickets-btn"><a href="#">Buy Tickets</a>
			<button class="apply-to-pitch-btn"><a href="#">Apply To Pitch</a></div> 
	

	</section> 
		</section>

 <?php
		// check if the repeater field has rows of data
		if( have_rows('pitch_summary') ): ?>

		<section class="flex-layout">
			<?php // loop through the rows of data
			while ( have_rows('pitch_summary') ) : the_row(); ?>

				<div class="flex-item-container">
				<img alt="Summary Icons" src="<?php the_sub_field('image'); ?>"/>
<h3 class="summary-title"><?php the_sub_field('title'); ?></h3>
				<p class="summary-description"><?php the_sub_field('description'); ?></p>
				
				</div>

			<?php endwhile; ?>
			<a href='#'>Apply To Pitch</a>
		</section>
		<?php else :
		endif;
		?>

		<section class="video-section">
			<video width="320" height="240" controls>
				<source src="<?php the_field('video'); ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</section> 

		<ul class="past-events">
		<?php
		if( have_rows('past_events') ): ?>

		<li class="past-event">
			<?php // loop through the rows of data
			while ( have_rows('past_events') ) : the_row(); ?>
				<img alt="Event Image" src="<?php the_sub_field('image'); ?>"/>
				<h3 class="past-events-date"><?php the_sub_field('date'); ?></h3>
				<h3 class="past-events-location"><?php the_sub_field('location'); ?></h3>
				<p class="past-events-description"><?php the_sub_field('description'); ?></p>
			<?php endwhile; ?>
		</li>
		<?php else :
		endif;
		?>
		</ul> 


	</main>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>