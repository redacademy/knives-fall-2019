<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */ ?>

 <?php 
 /**
  * What is your name?
    * First Name
    * Middle Name (Optional)
    * Last Name
  * Contact Info
    * Email
    * Phone
  * Address
    * Address Line 1
    * Address Line 2 (Optional)
    * City
    * Province
    * Postal Code
  * Company/Organization
  * Application
    * Tell us about your business...
    * How does your business make a postive impact on the local food economy?
    * What are your business' goals?
    * Who is your target audience?
  **/
 ?>
<?php get_header();?>

<?php while (have_posts()) : the_post();?>
<?php the_content();?>
<?php endwhile; ?>

<?php get_footer();?> 