<?php

/**
 * Block Name: Team
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>
<?php $bgColor = get_field('background_color'); ?>
<?php $heading = get_field('heading'); ?>
<section class="team" style="background-color:<?php echo $bgColor; ?>;">
    <h2 class="our-team"><?php echo $heading ?></h2>
    <div class="team-grid">
        <?php
        while (have_rows('team')) {

            the_row();

            $name = get_sub_field('name');

            $img = get_sub_field('portrait');

            $role = get_sub_field('role');

            ?>
            <div class="team-member">
                <img class="portrait" src="<?php echo $img['url']; ?>" alt="picture of <?php $name; ?>">
                <div class="desc">
                <p class="name"><?php echo $name; ?></p>
                <p class="role"><?php echo $role; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>