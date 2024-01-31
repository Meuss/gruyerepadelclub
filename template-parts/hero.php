<header class="relative flex flex-col justify-between pb-10 text-white lg:pb-20">
  <div class="container pt-8">
    <?php get_template_part('template-parts/logo', null, ['class' => 'w-44 h-auto md:hidden']) ?>
  </div>
  <div class="container">
    <div>
      <h1><?= the_title(); ?></h1>
    </div>
  </div>
  <div class="absolute inset-0 -z-10">
    <img srcset="<?= get_template_directory_uri(); ?>/assets/img/court-small.webp 500w, <?= get_template_directory_uri(); ?>/assets/img/court-medium.webp 1000w, <?= get_template_directory_uri(); ?>/assets/img/court.webp 2000w" sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 2000px" src="<?= get_template_directory_uri(); ?>/assets/img/court.webp" alt="Terrain de padel Bulle" class="h-full w-full object-cover object-center" />
  </div>
  <?php get_template_part('template-parts/logo', null, ['class' => 'hidden md:block absolute right-20 md:-bottom-16 md:w-56 lg:-bottom-32 lg:w-72 h-auto']) ?>
</header>