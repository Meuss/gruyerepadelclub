<div class="hero relative flex flex-col justify-end py-16 text-white object-cover min-h-[<?= is_front_page() ? '75' : '60' ?>svh]">
    <div class="absolute inset-0 -z-10">
        <?php
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if ($featured_img_url) { ?>
            <img srcset="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" sizes="100vw" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Terrain de padel Bulle" class="h-full w-full object-cover object-center" />
        <?php } else { ?>
            <img srcset="<?= get_template_directory_uri(); ?>/assets/img/court-small.webp 500w, <?= get_template_directory_uri(); ?>/assets/img/court-medium.webp 1000w, <?= get_template_directory_uri(); ?>/assets/img/court.webp 2000w" sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 2000px" src="<?= get_template_directory_uri(); ?>/assets/img/court.webp" alt="Terrain de padel Bulle" class="h-full w-full object-cover object-center" />
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