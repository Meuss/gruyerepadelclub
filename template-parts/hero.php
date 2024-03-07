<?php
// Featured image
$f_img_width = get_field('featured_img_width');
$container = $f_img_width === 'container' ? 'container' : '';
$padding = $f_img_width === 'container' ? 'md:pt-10' : '';

$f_img_position_y = get_field('featured_img_position_y');
$object_position = $f_img_position_y ?: 'object-center';

$default_img_path = get_template_directory_uri() . '/assets/img/';
?>

<div class="bg-white -z-20">
    <div class="hero relative flex flex-col justify-end py-16 text-white object-cover min-h-[300px] md:min-h-[600px] z-0 <?= $container ?>">
        <div class="absolute inset-0 -z-10 <?= $padding ?>">
            <?php
            $f_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if ($f_img_url) { ?>
                <img srcset="<?= $f_img_url ?>" sizes="100vw" src="<?= $f_img_url ?>" alt="Terrain de padel Bulle" class="h-full w-full object-cover <?= $object_position ?>" />
            <?php } else { ?>
                <img srcset="<?= $default_img_path ?>court-small.webp 500w, 
                <?= $default_img_path ?>court-medium.webp 1000w, 
                <?= $default_img_path ?>court.webp 2000w" sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 2000px" src="<?= $default_img_path ?>court.webp" alt="Terrain de padel Bulle" class="h-full w-full object-cover object-center" />
            <?php } ?>
        </div>
        <?php if (is_front_page()) : ?>
            <div class="container">
                <div class="flex flex-col items-center sm:flex-row">
                    <div class="-translate-x-4 translate-y-6">
                        <?php get_template_part('template-parts/logo', null, ['class' => 'w-44 lg:w-56 h-auto']) ?>
                    </div>
                    <h1 class="text-center uppercase leading-tight sm:text-left">Gruyère<br />Padel Club</h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>