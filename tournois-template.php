<?php
/*
Template Name: Page Tournois
*/
?>

<?php get_header() ?>

<?php the_content() ?>

<?php
setlocale(LC_TIME, 'fr_FR.UTF-8');
date_default_timezone_set('Europe/Zurich');

// get all published tournois
$tournois = get_posts([
    'post_type' => 'tournoi',
    'numberposts' => -1,
]);

$oneWeekAgo = new DateTime('now -1 week', new DateTimeZone('Europe/Zurich'));

?>

<div class="tournois grid sm:grid-cols-2 gap-10 xl:gap-20">
    <?php foreach ($tournois as $tournoi) : ?>
        <?php
        $startdate = get_field('date_de_debut', $tournoi->ID);
        $dateObject = DateTime::createFromFormat('d.m.Y H:i', $startdate, new DateTimeZone('Europe/Zurich'));

        if ($dateObject < $oneWeekAgo) {
            continue;
        }

        $title = get_the_title($tournoi->ID);
        $category = get_field('categorie', $tournoi->ID);
        $img = get_field('image', $tournoi->ID);
        $link = get_field('lien_dinscription', $tournoi->ID);
        $infos = get_field('informations', $tournoi->ID);

        $dateObject = DateTime::createFromFormat('d.m.Y H:i', $startdate);
        $formatter = new IntlDateFormatter(
            'fr_FR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'Europe/Zurich',
            IntlDateFormatter::GREGORIAN,
            'EEEE d MMMM y'
        );
        $formattedDate = $formatter->format($dateObject);
        ?>

        <div class="tournoi border border-primary rounded-xl text-center">
            <div class="pt-10 px-2">
                <h3 class="m-0"><?= $category ?></h3>
                <h4 class="capitalize mt-2"><?= $formattedDate ?> - <?= $dateObject->format('H\hi') ?></h4>
            </div>
            <img class="mb-10" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
            <div class="px-2">
                <?php if ($infos) : ?>
                    <?= $infos ?>
                <?php endif; ?>
                <a href="<?= $link ?>" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6">
                        <path fill="#edf2f4" d="M336 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H457.4L212.7 276.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0L480 54.6V176c0 8.8 7.2 16 16 16s16-7.2 16-16V16c0-8.8-7.2-16-16-16H336zM64 32C28.7 32 0 60.7 0 96V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V304c0-8.8-7.2-16-16-16s-16 7.2-16 16V448c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32H208c8.8 0 16-7.2 16-16s-7.2-16-16-16H64z" />
                    </svg>
                    Infos et inscription
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div>
    <h2 class="mt-20">Archives</h2>
    <div class="tournois grid sm:grid-cols-3 gap-10 grayscale opacity-80">
        <?php foreach ($tournois as $tournoi) : ?>
            <?php
            $startdate = get_field('date_de_debut', $tournoi->ID);
            $dateObject = DateTime::createFromFormat('d.m.Y H:i', $startdate, new DateTimeZone('Europe/Zurich'));

            if ($dateObject >= $oneWeekAgo) {
                continue;
            }

            $title = get_the_title($tournoi->ID);
            $category = get_field('categorie', $tournoi->ID);
            $img = get_field('image', $tournoi->ID);
            $link = get_field('lien_dinscription', $tournoi->ID);
            $infos = get_field('informations', $tournoi->ID);

            $dateObject = DateTime::createFromFormat('d.m.Y H:i', $startdate);
            $formatter = new IntlDateFormatter(
                'fr_FR',
                IntlDateFormatter::FULL,
                IntlDateFormatter::NONE,
                'Europe/Zurich',
                IntlDateFormatter::GREGORIAN,
                'EEEE d MMMM y'
            );
            $formattedDate = $formatter->format($dateObject);
            ?>

            <div class="tournoi border border-primary p-4 rounded-xl text-center">
                <div class="px-2">
                    <h3 class="m-0"><?= $category ?></h3>
                    <h4 class="capitalize mt-2"><?= $formattedDate ?> - <?= $dateObject->format('H\hi') ?></h4>
                </div>
                <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer() ?>