</div> <!-- end container -->
</div> <!-- end wrapper -->
</main>

<footer class="relative bg-primary text-white">
    <div class="container py-8 lg:flex lg:items-center lg:justify-between lg:py-16">
        <div class="hidden lg:block lg:flex-1">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="Logo Gruyère Padel Club" class="scale-150" />
        </div>
        <div class="flex flex-col lg:flex-1 lg:items-center">
            <div class="flex items-center gap-2">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="Logo Gruyère Padel Club" class="relative -left-2 w-16 lg:hidden" />
                <h3 class="my-0 lg:text-4xl">Gruyère Padel Club</h3>
            </div>
            <div class="mb-8 mt-4 w-72 border-b border-solid border-b-white"></div>
            <div class="mb-8 grid w-full max-w-[150px] grid-flow-col grid-cols-2 gap-3">
                <a href="https://www.instagram.com/gruyerepadelclub" target=" _blank" class="mx-auto flex flex-col justify-center rounded-full border p-4 transition-all duration-200 hover:scale-105">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-instagram.svg" alt="instagram" class="inline-block" />
                </a>
                <a href="mailto:info@gruyerepadel.ch" class="mx-auto flex flex-col justify-center rounded-full border p-4 transition-all duration-200 hover:scale-105">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-email.svg" alt="email" class="inline-block" />
                </a>
            </div>
            <p class="mb-0 text-xs">
                <span>© <?= date('Y') ?> Gruyère Padel Club - Powered by <a href="https://thomasmiller.ch">Thomas Miller</a></span>
            </p>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-grue.svg" alt="La gruyère" />
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>
