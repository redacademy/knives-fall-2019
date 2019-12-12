<?php

/**
 * Block Name: Team
 *
 * This is the template that displays the testimonial block.
 */

$avatar = get_field('memeber_avatar');

$id = 'team-' . $team['id'];

$align_class = $team['align'] ? 'align' . $team['align'] : '';

$name = the_field('our_team');

$role = the_field('organeization_role');
?>
<blockquote id="<?php echo $id; ?>" class="team <?php echo $align_class; ?>">
    <p><?php $name; ?></p>
    <cite>
        <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
        <span><?php the_field('author'); ?></span>
    </cite>
</blockquote>