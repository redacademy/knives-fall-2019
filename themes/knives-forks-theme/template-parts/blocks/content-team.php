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
<section>
    <h2 class='team-block-title'>Our Team</h2>
    <div class="team-member-container">
        <img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" class="team-member-image"/>
        <p class="team-member-name"><?php echo $name ?></p>
        <p class="team-member-role"><?php echo $role ?></p>
    </div>
</section>