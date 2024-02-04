</div> <!-- end container -->
</div> <!-- end wrapper -->
</main>


<footer class="bg-primary text-[#bcb9b9]">
    <div class="container py-16 md:py-24 lg:py-24">
        <div class="flex flex-row justify-between max-[767px]:flex-col max-[767px]:items-start">
            <div class="w-full max-w-[560px] max-[991px]:mr-4 max-[991px]:flex-initial max-[767px]:mr-0">
                <h2 class="text-3xl font-semibold text-white md:text-5xl mt-0 uppercase leading-none">
                    <span class="text-accent">Gruyère Padel</span> Club
                </h2>
            </div>
            <div class="max-[991px]:ml-4 max-[991px]:flex-none max-[767px]:ml-0 max-[767px]:mt-8">
                <div class="mb-4 flex max-w-[272px] items-center justify-start">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-instagram.svg" alt="instagram" class="mr-3 inline-block w-6" />
                    <a href="https://www.instagram.com/gruyerepadelclub" target="_blank" class="hover:text-accent transition">instagram</a>
                </div>
                <div class="mb-4 flex max-w-[272px] items-center justify-start">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/footer-email.svg" alt="email" class="mr-3 inline-block w-6" />
                    <a href="mailto:info@gruyerepadel.ch" target="_blank" class="hover:text-accent transition">info@gruyerepadel.ch</a>
                </div>
            </div>
        </div>
        <div class="mb-14 mt-16 w-full border-b border-white"></div>
        <div class="flex flex-row justify-between max-[991px]:items-center max-[767px]:flex-col max-[767px]:items-start max-[479px]:flex-col">
            <?php
            $theme_location = 'primary';
            $theme_locations = get_nav_menu_locations();

            if (isset($theme_locations[$theme_location])) {
                $menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
                $menu_name = $menu_obj->name;
                $menu_items = wp_get_nav_menu_items($menu_name);

                if ($menu_items) {
                    echo '<div class="text-center font-semibold max-[991px]:ml-0 max-[991px]:mr-0 max-[991px]:py-1 max-[479px]:mb-4 sm:text-center">';
                    foreach ($menu_items as $menu_item) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $current_class = (get_permalink() == $url) ? 'current-menu-item' : '';
                        echo "<a href='$url' class='$current_class inline-block py-1.5 pl-0 pr-6 font-normal text-[#bcb9b9] transition hover:text-accent sm:py-2 sm:pr-6 lg:pr-10'>$title</a>";
                    }
                    echo '</div>';
                }
            }
            ?>
            <div class="max-[991px]:flex-none w-full mt-8 sm:mt-0 md:w-auto whitespace-nowrap">
                <p class="text-[#bcb9b9] text-sm mb-0 text-center">
                    © <?= date('Y') ?> Gruyère Padel Club<br>
                    Powered by <a href="https://thomasmiller.ch">Thomas Miller</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>