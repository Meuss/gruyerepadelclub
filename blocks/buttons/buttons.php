<?php

/**
 * Bouton Block template.
 */
$link = get_field('lien_du_bouton');
$svg = get_field('icone_svg');
$reverted = get_field('reverted');
?>

<a class="btn<?= $reverted ? ' reverted' : '' ?>" href=<?= $link['url'] ?> target="<?= $link['target'] ?>">
    <?php if ($svg) : ?>
        <img src=<?= $svg['url'] ?> alt=<?= $svg['alt'] ?> />
    <?php endif; ?>
    <span><?= $link['title'] ?></span>
</a>