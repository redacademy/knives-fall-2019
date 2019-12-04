<?php

/**
 * information-blurbs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'information-blurbs-' . $block['id'];
print_r($id);
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
$title = get_field('title') ?: 'Your information-blurbs here...';
$content = get_field('content');
//$author = get_field('author') ?: 'Author name';
//$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
$background_color = get_field('background_color');
//$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <section id="<?php echo $id; ?>" style="background-color:<?php echo $background_color ?> ">
        <blockquote class="information-blurbs-blockquote">
            <span class="information-blurbs-title"><?php echo $title; ?></span>
            <span class="information-blurbs-content"><?php echo $content; ?></span>
            <!-- <span class="information-blurbs-role"><?php //echo $role; ?></span> -->
        </blockquote>
        <div class="information-blurbs-image">
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
    </section>
</div>