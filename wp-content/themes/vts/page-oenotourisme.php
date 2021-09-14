<?php
/*
Template name: gabarit oenotoursime
*/

get_header();
?>

    <div class="container mt-5">
        <header class="page-header"><img src="/wp-content/uploads/2020/12/logo_vts.png" class="page-top-logo">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <!--<div id="primary" class="content-area">-->
        <main id="main" class="site-main" role="main">

            <?php
            // vérifier l'activation de ACF
            if (!function_exists('get_field')) {
                return;
            }
            ?>
            <div id="oenotoursime">
                <!-- intro -->
                <div class="wrap" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300">
                    <div class="oenoIntro">
                        <?= the_content(); ?>
                    </div>
                </div>
                <?php if (have_rows('sections')): ?>
                    <?php while (have_rows('sections')): the_row();
                        $row = get_row(true); ?>
                        <!-- section -->
                        <section id="section<?= get_row_index() ?>" name="section<?= get_row_index() ?>"
                                 data-aos="fade-up"
                                 data-aos-duration="1000"
                                 data-aos-anchor-placement="top-bottom" data-aos-delay="300">

                            <div class="row">
                                <div class="col-5 <?= (get_row_index() % 2 == 1) ? 'order-md-first' : 'order-md-last offset-1'; ?>">
                                    <div class="section_title">
                                        <h2><?= $row['titre']; ?></h2>
                                        <span class="oenoDate"></span>
                                    </div>
                                    <div class="section_txt"><?= $row['texte'] ?></div>
                                    <?php if (!empty($row['lien'])): ?>
                                        <a class="btn btn-primary" href="<?= $row['lien'] ?>" target="_blank">
                                            <?= $row['texte_du_bouton'] ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-6 <?= (get_row_index() % 2 == 1) ? 'order-md-last offset-1 pl-0' : 'order-md-first pr-0'; ?>">
                                    <img src="<?= $row['image_1']['url'] ?>"/>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="clr"></div>

            </div>
        </main><!-- #main -->

    </div>
    <!--</div> #primary -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>


<?php get_footer();

