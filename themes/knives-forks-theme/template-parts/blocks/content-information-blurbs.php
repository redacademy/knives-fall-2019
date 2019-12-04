<?php

/**
 * information-blurbs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value. ?>
<!-- <pre>
<?php //print_r( $block ); ?>
</pre> -->
<?php
$id = 'information-blurbs-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'information-blurbs';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className']; 
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
//$title = get_field('title');
//$content = get_field('content');
//$author = get_field('author') ?: 'Author name';
//$role = get_field('role') ?: 'Author role';
//$image = get_field('image') ?: 295;
//$background_color = get_field('background_color');
//$text_color = get_field('text_color');

$members = get_field('become_a_member');
$pitchs = get_field('make_a_pitch');

// foreach($members as $member) {
//     echo $member['title'];
// }

while( have_rows('become_a_member') ) {
    the_row();?>
    
        <section class="become-member-container" style="background-color: <?php echo get_sub_field('background_color')?>">
            <div class="become-member-text">
                <h2 class="blurb-title"><?php the_sub_field('title');?></h2>
                <p class="blurb-text"><?php the_sub_field('content')?></p>
            </div>
            <?php
            $image = get_sub_field('image');?>
            <img class="become-member-image" src="<?php echo $image['url'];?>">

        </section>
<?php 
}

while (have_rows('make_a_pitch')) {
    the_row();?>
        <section class="make-pitch-container" style="background-color: <?php echo get_sub_field('background_color')?>">
            <div class="make-pitch-text">
                <h2 class="blurb-title"><?php the_sub_field('title');?></h2>
                <p class="blurb-text"><?php the_sub_field('content');?></p>
            </div>
            <?php $image = get_sub_field('image');?>
            <img class="make-pitch-image" src="<?php echo $image['url'];?>">
        </section>
<?php } ?>

 