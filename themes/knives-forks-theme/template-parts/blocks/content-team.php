<?php

/**
 * Block Name: Team
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


while (have_rows('our_team')) {

    the_row();
    $heading = get_field('our_team');

    $name = get_sub_field('name');

    $img = get_sub_field('portrait');

    $role = get_sub_field('role');

    $bgColor = get_field('background_color'); ?>

    <section class="team-grid" style="background-color: <?php echo $bgColor; ?>">
        <h2><?php echo $heading ?></h2>
        <div class="team-member">
            <img class="portrait" src="<?php echo $img['url']; ?>" alt="picture of <?php $name; ?>">
            <p class="name"><?php echo $name; ?></p>
            <p class="role"><?php echo $role; ?></p>
        </div>
    </section>
<?php } ?>