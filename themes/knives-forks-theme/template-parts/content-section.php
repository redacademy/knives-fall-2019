<?php
/**
 * Block Name: Section
 *
 * This is the template that displays the section block.
 */

// Create id attribute
$id = 'section-' . $block['id'];

//Block Styles
$bg_colour = get_field('background_colour');
//$title_colour = get_field('title_colour');
//$copy_colour = get_field('copy_colour');


?> 

<section id="<?php echo $id; ?>" style="background-color:<?php echo $bg_colour ?> ">

  <!-- <h2 style="color:<?php //echo $title_colour ?>"> -->
    <?php the_field('title'); ?>
  </h2>

  <!-- <p style="color: <?php //echo $copy_colour ?>"> -->
    <?php the_field('content'); ?>
  </p>

</section>