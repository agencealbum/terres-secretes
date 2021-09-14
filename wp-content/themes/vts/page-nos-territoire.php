<?php
/*
Template name: gabarit nos-territoire
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
        <main>

            <?php
            // vérifier l'activation de ACF
            if (!function_exists('get_field')) {
                return;
            }
            ?>
            <div id="nosTerritoire">
                <!-- intro -->
                <div class="wrap" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300">
                    <div class="row">
                        <div class="col-4">
                            <?= the_content(); ?>
                        </div>
                        <div class="col-8">
                            <?php get_template_part('partials/image'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
                        <?php if (!empty($row['titre'])): ?>
                            <div class="row">
                                <div class="col">
                                    <h2><?= $row['titre']; ?></h2>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($row['texte'])): ?>
                            <div class="row">
                                <div class="col">
                                    <p><?= $row['texte']; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row pt-5">
                            <?php if (!empty($row['image_1']['url'])): ?>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= $row['image_1']['url']; ?>"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['image_1']['title']; ?></h5>
                                            <p class="card-text"><?= $row['image_1']['caption']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($row['image_2']['url'])): ?>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= $row['image_2']['url']; ?>"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['image_2']['title']; ?></h5>
                                            <p class="card-text"><?= $row['image_2']['caption']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($row['image_3']['url'])): ?>
                                <div class="col">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= $row['image_3']['url']; ?>"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['image_3']['title']; ?></h5>
                                            <p class="card-text"><?= $row['image_3']['caption']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
    </div>
    <div class="container mt-5">
        <section class="section_block"
                 data-aos="fade-up"
                 data-aos-duration="1000"
                 data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <img src="<?= wp_get_attachment_url(465) ?>"/>
        </section>
    </div>

    <!--</div> #primary -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>


<?php get_footer();