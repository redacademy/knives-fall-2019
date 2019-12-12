<?php
/**
 * Static page for apply to pitch.
 *
 * @package RED_Starter_Theme
 */ ?>

 
<?php get_header();?>

<?php while (have_posts()) : the_post();?>
<?php the_content();?>
<?php endwhile; ?>

<?php get_footer();?> 