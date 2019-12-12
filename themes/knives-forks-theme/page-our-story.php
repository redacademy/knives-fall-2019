<?php get_header(); ?>
<?php while (have_posts()) :
    the_post(); ?>
    <?php the_content(); ?>
    <?php get_template_part('blocks/content-team'); ?>  
<?php endwhile; ?>
<?php get_footer(); ?>