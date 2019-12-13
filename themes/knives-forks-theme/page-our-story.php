<?php get_header(); ?>
<?php while (have_posts()) :
    the_post(); ?>
<?php endwhile; ?>
<div class="team-grid">
<?php the_content(); ?>
</div>
<?php get_footer(); ?>