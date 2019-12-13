<?php get_header(); ?>
<?php while (have_posts()) :
    the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<div class="team-grid">
    <?php get_template_part('blocks/content', 'team'); ?>
</div>
<?php get_footer(); ?>