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

		<section class="flex_layout">


			<?php // loop through the rows of data
			while ( have_rows('pitch_summary') ) : the_row(); ?>

				<div class="flex_item">
<h3><?php the_sub_field('title'); ?></h3>
				<p class="summary-description"><?php the_sub_field('description'); ?></p>
					<img src="<?php the_sub_field('image'); ?>"/>
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