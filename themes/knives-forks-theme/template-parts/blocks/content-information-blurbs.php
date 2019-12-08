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

$members = get_field('become_a_member');
$pitchs = get_field('make_a_pitch');

// foreach($members as $member) {
//     echo $member['title'];
// }

while( have_rows('become_a_member') ) {
    the_row();?>
    <?php
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
        $background_color = get_sub_field('background_color');
    ?>
        <section class="custom-copy-block image-copy" style="background-color: <?php echo $background_color?>">
            <div class="copy-block-content">
                <article class="copy-block-text">
                    <h2 class="copy-title"><?php echo $title;?></h2>
                    <h3 class="copy-subtitle"><?php echo $subtitle; ?></h3>
                    <p class="copy-text"><?php echo $content?></p>
                </article>
                <a href= "#" class='copy-block-btn btn'>Become a Member</a>
            </div>
            <figure class="copy-block-image">
                <img src="<?php echo $image['url'];?>">
            </figure>
        </section>
<?php 
}

while (have_rows('make_a_pitch')) {
    the_row();?>
    <?php
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
        $background_color = get_sub_field('background_color');
    ?>
        <section class="custom-copy-block copy-image" style="background-color: <?php echo $background_color?>">
        <div class="copy-block-content">
                <article class="copy-block-text">
                    <h2 class="copy-title"><?php echo $title;?></h2>
                    <h3 class="copy-subtitle"><?php echo $subtitle; ?></h3>
                    <p class="copy-text"><?php echo $content?></p>
                </article>
                <a href= "#" class='copy-block-btn btn'>Apply to Pitch</a>
            </div>
            <figure class="copy-block-image">
                <img src="<?php echo $image['url'];?>">
            </figure>
        </section>
<?php } ?>

 