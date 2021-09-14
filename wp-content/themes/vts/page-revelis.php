<?php

/*
Template name: gabarit revelis
*/

get_header();

?>

    <div class="revelis pt-5">

        <div class="container my-4">

            <div class="row mb-5 pb-5">

                <div class="col-lg-6">

                    <div class="sticky-top" style="top: 100px;">
                        <?php the_custom_logo(); ?>
                        <div class="pr-lg-5">
                            <img class="mb-2 mt-5" title="Révélis"
                                 src="<?= get_stylesheet_directory_uri(); ?>/img/revelis/revelis_white.svg">
                            <span class="bandeau-orange mb-1">Saint-Véran 2017</span>
                        </div>

                        <div class="pr-lg-5 pt-5 mr-lg-5">
                            <div class="pr-lg-5 pb-5 mr-lg-5">

                                <?php the_content(); ?>

                                <span class="btn-play" data-toggle="modal" data-target="#video360" style="
              position: relative;
              top: 20px;
              right: -10px;
              border: 1px solid #fff;
              padding: 7px 30px;
              color: #fff;
              cursor: pointer;
              ">
                                    <?php if (ICL_LANGUAGE_CODE == "fr"): ?>
                                        <i class="fas fa-globe" style="margin-right:5px"></i> Voir le 360 °
                                    <?php else: ?>
                                        <i class="fas fa-globe" style="margin-right:5px"></i> See the 360 °
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img class="bottle" src="<?= get_stylesheet_directory_uri(); ?>/img/revelis/bouteille_revelis.png">

                    <span class="tip tip-1" data-aos="fade-right">
            <?= get_field('tip_1'); ?>
        </span>

                    <span class="tip tip-2" data-aos="fade-right">
          <?= get_field('tip_2'); ?>
        </span>

                    <span class="tip tip-3" data-aos="fade-right">
          <?= get_field('tip_3'); ?>
        </span>

                    <span class="tip tip-4" data-aos="fade-right">
          <?= get_field('tip_4'); ?>
        </span>
                </div>
            </div>

            <div class="childs mt-5 pt-5">
                <?php get_template_part('partials/sections'); ?>
            </div>

            <div class="row text-center mt-5">
                <div class="col text-center">
                    <?php if (ICL_LANGUAGE_CODE == "fr"): ?>
                        <a href="<?= get_the_permalink(286); ?>" class="mb-2 btn btn-primary">Voir la fiche de ce vin</a>
                    <?php else: ?>
                        <a href="<?= get_the_permalink(286); ?>" class="mb-2 btn btn-primary">See this wine</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="video360" aria-labelledby="video360" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered border-0">
            <div class="modal-content border-0">
                <video controls loop style="width: 100%;" id="video1">

                    <source src="<?= get_stylesheet_directory_uri(); ?>/videos/revelis.webm"
                            type="video/webm">

                    <source src="<?= get_stylesheet_directory_uri(); ?>/videos/revelis.mp4"
                            type="video/mp4">

                    Sorry, your browser doesn't support embedded videos.
                </video>
            </div>
        </div>
    </div>

<?php get_footer();
