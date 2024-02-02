<?php

/**
 * Membre comité Block template.
 */
$img = get_field('image');
$nom = get_field('nom');
$role = get_field('role');
?>

<div class="membre-comite">
  <div class="img-wrapper">
    <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" class="h-full w-full object-cover object-center" />
  </div>
  <p>
    <?= $nom ?><br />
    <span><?= $role ?></span>
  </p>
</div>