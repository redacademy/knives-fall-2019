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

<div class="blurb-container">

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
$tmpCount=1;
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
        <section class="custom-copy-block image-copy" style="order:<?=$tmpCount?>;background-color: 
        <?php $tmpCount+=2;
        echo $background_color?>">
            <div class="copy-block-content">
                <article class="copy-block-text">
                    <h2 class="copy-title"><?php echo $title;?></h2>
                    <h3 class="copy-subtitle"><?php echo $subtitle; ?></h3>
                    <p class="copy-text"><?php echo $content?></p> 
                </article>
                <?php $investor = get_page_by_title('Become an Investor'); ?>
                <a href="<?php echo get_permalink($investor); ?>" class='copy-block-btn btn'>Become a Member</a>
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
        <section class="custom-copy-block copy-image" style="order:<?=$tmpCount?>;
        background-color: <?php echo $background_color?>">
        <div class="copy-block-content">
                <article class="copy-block-text">
                    <h2 class="copy-title"><?php echo $title;?></h2>
                    <h3 class="copy-subtitle"><?php echo $subtitle; ?></h3>
                    <p class="copy-text"><?php echo $content?></p>
                </article>
                <?php $pitch = get_page_by_title('apply to pitch');?>
                <a href= "<?php the_permalink($pitch)?>" class='copy-block-btn btn'>Apply to Pitch</a>
            </div>
            <figure class="copy-block-image">
                <img src="<?php echo $image['url'];?>">
            </figure>
        </section>
        </div>
<?php } ?>

 