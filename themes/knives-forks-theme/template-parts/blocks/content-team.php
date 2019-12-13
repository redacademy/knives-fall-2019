<?php

/**
 * Block Name: Team
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$img = get_sub_field('portrait');

$name = get_sub_field('name');

$role = get_sub_field('role');
$bgColor = get_sub_field('background_color');


$team = get_field('our_team');
if ($team) : ?>
    <div id="team">
        <img src="<?php echo esc_url($team['image']['url']); ?>" alt="<?php echo esc_attr($team['image']['alt']); ?>" />
        <div class="content">
            <?php echo $team['name']; ?>
            <a href="<?php echo esc_url($team['link']['url']); ?>"><?php echo esc_html($team['link']['title']); ?></a>
        </div>
    </div>
    <style type="text/css">
        #team {
            background-color: <?php echo esc_attr($team['color']); ?>;
        }
    </style>
<?php endif; ?>