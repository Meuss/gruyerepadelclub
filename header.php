<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Thomas Miller, thomasmiller.ch" />
    <!-- Open Graph defaults -->
    <meta property="og:image:height" content="1072" />
    <meta property="og:image:width" content="2048" />
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/img/og-image.jpg" />

    <!-- favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/site.webmanifest" />
    <link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col h-screen') ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template-parts/hamburger') ?>
    <?php get_template_part('template-parts/offcanvas') ?>

    <div class="wrapper">
        <?php get_template_part('template-parts/hero') ?>
        <main class="bg-white py-10 lg:py-16">
            <div class="container">