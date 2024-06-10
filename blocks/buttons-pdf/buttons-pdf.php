<?php

/**
 * Bouton PDF Block template.
 */
$text = get_field('texte');
$file = get_field('pdf');
$svg = get_field('icone_svg');
?>

<a class="btn" href="<?= $file['url'] ?>" target="">
    <?php if ($svg) : ?>
        <img src=<?= $svg['url'] ?> alt=<?= $svg['alt'] ?> />
    <?php endif; ?>
    <span><?= $text ?></span>
</a>