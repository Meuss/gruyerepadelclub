<?php

/**
 * Sponsor Block template.
 */

// get all published sponsors
$sponsors = get_posts([
    'post_type' => 'sponsors',
    'numberposts' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
]);
?>

<div class="sponsors">
    <?php foreach ($sponsors as $sponsor) : ?>
        <?php
        $img = get_field('logo', $sponsor->ID);
        $lien = get_field('site_web', $sponsor->ID);
        $nom = get_the_title($sponsor->ID);
        ?>
        <a class="sponsor" href="<?= $lien ?? 'javascript:void(0);' ?>" target="<?= $lien ? '_blank' : '_self' ?>" title="<?= $nom ?>">
            <div class="img-wrapper">
                <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" class="h-full w-full object-cover object-center" />
            </div>
        </a>
    <?php endforeach; ?>
</div>
