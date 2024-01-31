<?php

/**
 * Image - Texte Block template.
 */
$img = get_field('image');
$text = get_field('texte');
?>
<section>
  <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
    <div class="image_cont">
      <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" />
    </div>
    <div class="lg:flex lg:flex-col lg:items-start lg:justify-center">
      <?= $text ?>
      <!-- <a class="btn" href={instagramlink} target="_blank">
        <img src={instagram} alt="instagram" />
        <span>Suivre sur instagram</span>
      </a> -->
    </div>
  </div>
</section>