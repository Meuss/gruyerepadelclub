<div class="hero relative flex flex-col justify-between py-10 text-white object-cover">
    <div class="container">
        <?php get_template_part('template-parts/logo', null, ['class' => 'w-44 h-auto md:hidden']) ?>
    </div>
    <?php /*
    <?php if (is_front_page()) : ?>
        <div class="container">
            <div>
                <h1><?= the_title(); ?></h1>
            </div>
        </div>
    <?php endif; ?>
    */ ?>
    <div class="absolute inset-0 -z-10">
        <img srcset="<?= get_template_directory_uri(); ?>/assets/img/court-small.webp 500w, <?= get_template_directory_uri(); ?>/assets/img/court-medium.webp 1000w, <?= get_template_directory_uri(); ?>/assets/img/court.webp 2000w" sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 2000px" src="<?= get_template_directory_uri(); ?>/assets/img/court.webp" alt="Terrain de padel Bulle" class="h-full w-full object-cover object-center" />
    </div>
    <?php if (is_front_page()) : ?>
        <div class="container">
            <div class="flex">
                <div class="-translate-x-4">
                    <?php get_template_part('template-parts/logo', null, ['class' => 'w-56 h-auto']) ?>
                </div>
                <h1 class="uppercase leading-tight">Gruyère<br />Padel Club</h1>
            </div>
        </div>
    <?php endif; ?>
</div>