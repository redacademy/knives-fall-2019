<?php

/**
 * Block Name: Team
 *
 * This is the template that displays the testimonial block.
 */
$avatar = get_field('member_avatar');

$name = get_field('our_team');

$role = get_field('organization_role');
?>
<div class="team-member">
    <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
    <p><?php echo $name ?></p>
    <p><?php echo $role ?></p>
    </div>
