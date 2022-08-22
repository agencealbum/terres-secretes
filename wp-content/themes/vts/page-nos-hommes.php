<?php
/*
Template name: gabarit nos-hommes
*/

get_header();
?>

    <div class="container mt-5">
        <header class="page-header">
            <figure class="wp-block-image size-large is-resized">
                <img loading="lazy"
                     src="<?= wp_get_attachment_url(80); ?>"
                     alt="" class="wp-image-80"
                     sizes="(max-width: 180px) 100vw, 180px"
                     width="180" height="180">
            </figure>
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <!--<div id="primary" class="content-area">-->

            <?php
            // vérifier l'activation de ACF
            if (!function_exists('get_field')) {
                return;
            }
            ?>
            <div id="nosHommes">
                <!-- intro -->
                <div class="wrap" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section_title">
                                <h2><?= get_field('sous-titres'); ?></h2>
                            </div>
                            <?= the_content(); ?>
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <?php get_template_part('partials/image-with-caption'); ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div id="bannerNosHommes" class="container-fluid">
        <div class="row w-100 p-0 m-0">
            <div class="col p-0">
                <img class="w-100" src="<?= get_the_post_thumbnail_url(77); ?>"/>
                <div class="image-caption">><?= get_post(get_post_thumbnail_id(77))->post_title; ?><br/>
                    <?= get_the_post_thumbnail_caption(77); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <main>
            <?php if (have_rows('sections')): ?>
                <?php while (have_rows('sections')): the_row();
                    $row = get_row(true); ?>
                    <!-- section -->
                    <section id="section<?= get_row_index() ?>" name="section<?= get_row_index() ?>"
                             class="section_block"
                             data-aos="fade-up"
                             data-aos-duration="1000"
                             data-aos-anchor-placement="top-bottom" data-aos-delay="300">

                        <div class="row">
                            <div class="col">
                                <h2 class="text-center"><?= $row['titre']; ?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <?= $row['texte']; ?>
                            </div>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
    </div>

    <!--</div> #primary -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>


<?php get_footer();