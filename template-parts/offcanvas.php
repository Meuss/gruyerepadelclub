<aside class="offcanvas pointer-events-none fixed z-10 flex h-[100dvh] w-screen flex-col justify-center bg-primary p-4 sm:p-10 text-white opacity-0 shadow-lg transition-opacity duration-200 lg:pb-48">
  <div></div>
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container' => 'nav',
    'container_class' => 'align-center flex flex-col items-center gap-8 font-serif text-4xl lg:text-6xl',
  ]);
  ?>
  <div class="mt-16 mx-auto grid w-full max-w-[150px] grid-flow-col grid-cols-2 gap-3 lg:hidden">
    <a href="https://www.instagram.com/gruyerepadelclub" target="_blank" class="mx-auto flex flex-col justify-center rounded-full border p-4 transition-all duration-200 hover:scale-105">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-instagram.svg" alt="instagram" class="inline-block" />
    </a>
    <a href="mailto:info@gruyerepadel.ch" class="mx-auto flex flex-col justify-center rounded-full border p-4 transition-all duration-200 hover:scale-105">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-email.svg" alt="email" class="inline-block" />
    </a>
  </div>
  <div class="absolute bottom-10 left-2/4 -translate-x-1/2 flex flex-col items-center gap-6 whitespace-nowrap z-10">
    <div class="flex flex-col justify-center sm:flex-row items-center gap-4">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="Logo Gruyère Padel Club" class="w-16 lg:w-24" />
      <h3 class="my-0 lg:text-xl">Gruyère Padel Club</h3>
    </div>
    <div class="hidden w-full max-w-[150px] grid-flow-col grid-cols-2 gap-3 lg:grid">
      <a href="https://www.instagram.com/gruyerepadelclub" target="_blank" class="mx-auto flex flex-col justify-center rounded-full border p-4 transition-all duration-200 hover:scale-105">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-instagram.svg" alt="instagram" class="inline-block" />
      </a>
      <a href="mailto:info@gruyerepadel.ch" class="mx-auto flex flex-col justify-center rounded-full border p-4 transition-all duration-200 hover:scale-105">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-email.svg" alt="email" class="inline-block" />
      </a>
    </div>
  </div>
  <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-grue.svg" alt="La gruyère" class="absolute -right-0 bottom-0 scale-125 opacity-25 lg:origin-bottom-right lg:scale-150 pointer-events-none z-0" />
</aside>