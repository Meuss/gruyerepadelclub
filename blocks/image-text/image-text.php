<?php

/**
 * Image - Texte Block template.
 */
$img = get_field('image');
$text = get_field('texte');
$link = get_field('lien');
$svg = get_field('icone_svg');
?>

<section>
  <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
    <div class="image_cont">
      <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" />
    </div>
    <div class="lg:flex lg:flex-col lg:items-start lg:justify-center">
      <?= $text ?>
      <?php if ($link) : ?>
        <a class="btn" href=<?= $link['url'] ?> target="<?= $link['target'] ?>">
          <?php if ($svg) : ?>
            <img src=<?= $svg['url'] ?> alt=<?= $svg['alt'] ?> />
          <?php endif; ?>
          <span><?= $link['title'] ?></span>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>