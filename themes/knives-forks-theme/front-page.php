<?php get_header();?>


<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
                <?php //get_template_part( 'template-parts/blocks/content', 'information-blurbs' ); ?>
                <?php //get_template_part( 'template-parts/content'); ?>

			<?php endwhile; ?>    
<?php get_footer();?>