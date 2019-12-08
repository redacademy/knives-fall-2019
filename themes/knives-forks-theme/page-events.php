<?php

/**
 * The template for displaying events page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

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
		</section>
		<?php else :

			// no rows found

		endif;

		?>
	</main>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>