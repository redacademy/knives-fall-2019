<?php get_header(); ?>
<?php while (have_posts()) :
    the_post(); ?>
<?php endwhile; ?>

<?php the_content(); ?>

<?php get_footer(); ?>