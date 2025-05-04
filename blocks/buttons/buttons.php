<?php

/**
 * Bouton Block template.
 */
$link = get_field('lien_du_bouton');
$svg = get_field('icone_svg');
$reverted = get_field('reverted');
$center = get_field('center');
?>

<div class="flex<?= $center ? ' justify-center' : '' ?>">
    <?php if ($link && is_array($link) && !empty($link['url'])) : ?>
        <a class="btn<?= $reverted ? ' reverted' : '' ?>" href="<?= esc_url($link['url']) ?>" target="<?= esc_attr($link['target'] ?? '') ?>">
            <?php if ($svg && is_array($svg) && !empty($svg['url'])) : ?>
                <img src="<?= esc_url($svg['url']) ?>" alt="<?= esc_attr($svg['alt'] ?? '') ?>" />
            <?php endif; ?>
            <span><?= esc_html($link['title'] ?? '') ?></span>
        </a>
    <?php endif; ?>
</div>