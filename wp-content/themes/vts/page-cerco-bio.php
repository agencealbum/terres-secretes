<?php

get_header();


$section1 = get_field('section_1');
$section2 = get_field('section_2');
$section3 = get_field('section_3');
$section4 = get_field('section_4');
$socials  = get_field('reseaux_sociaux');
?>
    <div class="vts__cerco__boutique">
        <div class="vts__cerco__boutique__content">
            <p class="vts__cerco__boutique__text"><?php echo get_field('texte_du_footer'); ?></p>
            <div class="vts__cerco__boutique__socials">
                <?php echo empty($socials['facebook']) ? '' : '<a target="_blank" href="' . $socials['facebook'] . '"><i class="fab fa-facebook-square"></i></a>'; ?>
                <?php echo empty($socials['linkedin']) ? '' : '<a target="_blank" href="' . $socials['linkedin'] . '"><i class="fab fa-linkedin-in"></i></a>' ?>
                <?php echo empty($socials['instagram']) ? '' : '<a target="_blank" href="' . $socials['instagram'] . '"><i class="fab fa-instagram"></i></a>' ?>
            </div>
            <img class="vts__cerco__boutique__cerco-logo"
                 src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/LogoCercoHorizontalwhite.svg'; ?>">
        </div>
    </div>
    <div class="vts__cerco">
        <div class="vts__cerco__video__container">
            <video muted playsinline loop controls class="vts__cerco__video"
                   poster="<?php echo get_stylesheet_directory_uri() . '/img/cerco/video/poster.jpg'; ?>"
                   preload="none">
                <source src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/video/VTS-Cerco-v4-Cartons-HD-171121.mp4'; ?>"
                        type="video/mp4">
            </video>
        </div>
        <section class="vts__cerco__section vts__cerco__section--light row no-gutters">
            <div class="col-12 col-lg-6 vts__cerco__section--light__text">
                <div class="vts__cerco__section--light__text__content" data-aos="fade-right">
                    <h2 class="vts__cerco__section__title"><?php echo $section1['titre']; ?></h2>
                    <p class="vts__cerco__section__text">
                        <?php echo $section1['texte']; ?>
                        <br>
                        <?php if($section1['bouton']['afficher_le_bouton']) : ?>
                            <a href="<?php echo $section1['bouton']['lien_du_bouton']; ?>" target="_blank" type="button"
                               class="vts__cerco__section__parlent">
                                <i class="far fa-play-circle"></i><?php echo $section1['bouton']['texte_du_bouton']; ?>
                            </a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 vts__cerco__section--1__image" data-aos="fade-left"
                 data-aos-anchor-placement="center-bottom">
                <img src="<?php echo $section1['image']; ?>">
            </div>
        </section>
        <section class="vts__cerco__section vts__cerco__section--dark row no-gutters">
            <div class="col-12 col-lg-6 vts__cerco__section__image" data-aos="fade-right"
                 data-aos-anchor-placement="center-bottom">
                <img src="<?php echo $section2['image']; ?>">
            </div>
            <div class="col-12 col-lg-6 vts__cerco__section--dark__text">
                <div class="vts__cerco__section--dark__text__content" data-aos="fade-left">
                    <h2 class="vts__cerco__section__title"><?php echo $section2['titre']; ?></h2>
                    <p class="vts__cerco__section__text">
                        <?php echo $section2['texte']; ?>
                        <br>
                        <?php if($section2['bouton']['afficher_le_bouton']) : ?>
                            <a href="<?php echo $section2['bouton']['lien_du_bouton']; ?>" target="_blank" type="button"
                               class="vts__cerco__section__parlent">
                                <i class="far fa-play-circle"></i><?php echo $section2['bouton']['texte_du_bouton']; ?>
                            </a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </section>
        <section class="vts__cerco__section vts__cerco__section--light row no-gutters">
            <div class="col-12 col-lg-6 vts__cerco__section--light__text">
                <div class="vts__cerco__section--light__text__content" data-aos="fade-right">
                    <h2 class="vts__cerco__section__title"><?php echo $section3['titre']; ?></h2>
                    <p class="vts__cerco__section__text">
                        <?php echo $section3['texte']; ?>
                        <br>
                        <?php if($section3['bouton']['afficher_le_bouton']) : ?>
                            <a href="<?php echo $section3['bouton']['lien_du_bouton']; ?>" target="_blank" type="button"
                               class="vts__cerco__section__parlent">
                                <i class="far fa-play-circle"></i><?php echo $section3['bouton']['texte_du_bouton']; ?>
                            </a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 vts__cerco__section__image" data-aos="fade-left"
                 data-aos-anchor-placement="center-bottom">
                <img src="<?php echo $section3['image']; ?>">
            </div>
        </section>
        <section class="vts__cerco__section vts__cerco__section--dark vts__cerco__section__game-bio-engagee">
            <div class="vts__cerco__section__game-bio-engagee__container">
                <h2 class="vts__cerco__section__title vts__cerco__section__game-bio-engagee__title"
                    data-aos="fade-right"><?php echo $section4['titre']; ?></h2>
                <img class="vts__cerco__section__game-bio-engagee__bottle"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/Bouteilles-Macon-village.png'; ?>">

                <!--Bouteille-->
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__bouteille"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-recycler.svg'; ?>"
                     data-aos="fade-right"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__bouteille"
                     data-aos-delay="800" data-aos-duration="800">
                <div class="vts__cerco__section__game-bio-engagee__bottle_line__bouteille" data-aos="fade"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__bouteille"
                     data-aos-duration="800"></div>
                <div class="vts__cerco__section__game-bio-engagee__bottle_desc vts__cerco__section__game-bio-engagee__bottle_desc__bouteille"
                     data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
                    <?php echo $section4['texte_bouteille']; ?>
                </div>

                <!--Etiquette-->
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__etiquette1"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-reutiliser.svg'; ?>"
                     data-aos="fade-right"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__etiquette"
                     data-aos-delay="1600" data-aos-duration="800">
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__etiquette2"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-recycler.svg'; ?>"
                     data-aos="fade-right"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__etiquette"
                     data-aos-delay="1200" data-aos-duration="800">
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__etiquette3"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-reduire.svg'; ?>"
                     data-aos="fade-right"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__etiquette"
                     data-aos-delay="800" data-aos-duration="800">
                <div class="vts__cerco__section__game-bio-engagee__bottle_line__etiquette" data-aos="fade"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__etiquette"
                     data-aos-duration="800"></div>
                <div class="vts__cerco__section__game-bio-engagee__bottle_desc vts__cerco__section__game-bio-engagee__bottle_desc__etiquette"
                     data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
                    <?php echo $section4['texte_etiquette']; ?>
                </div>

                <!--Capsule-->
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__capsule"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-refuser.svg'; ?>"
                     data-aos="fade-left"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__capsule"
                     data-aos-delay="800" data-aos-duration="800">
                <div class="vts__cerco__section__game-bio-engagee__bottle_line__capsule" data-aos="fade"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__capsule"
                     data-aos-duration="800"></div>
                <div class="vts__cerco__section__game-bio-engagee__bottle_desc vts__cerco__section__game-bio-engagee__bottle_desc__capsule"
                     data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
                    <?php echo $section4['texte_capsule']; ?>
                </div>

                <!--Bouchon-->
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__bouchon"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-reduire.svg'; ?>"
                     data-aos="fade-left"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__bouchon"
                     data-aos-delay="800" data-aos-duration="800">
                <div class="vts__cerco__section__game-bio-engagee__bottle_line__bouchon1" data-aos="fade"
                     data-aos-anchor=".vts__cerco__section__game-bio-engagee__bottle_desc__bouchon"
                     data-aos-duration="800" data-aos-id="animation-line-bouchon1"></div>
                <div class="vts__cerco__section__game-bio-engagee__bottle_line__bouchon2 vts__cerco__section__game-bio-engagee__bottle_line__bouchon2__unanimate"></div>
                <div class="vts__cerco__section__game-bio-engagee__bottle_desc vts__cerco__section__game-bio-engagee__bottle_desc__bouchon"
                     data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
                    <?php echo $section4['texte_bouchon']; ?>
                </div>

                <!--Carton-->
                <img class="vts__cerco__section__game-bio-engagee__carton"
                     src="<?php echo $section4['image_carton']; ?>" data-aos="fade" data-aos-duration="800">
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__carton1"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-recycler.svg'; ?>"
                     data-aos="fade-right" data-aos-duration="800">
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__carton2"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-reutiliser.svg'; ?>"
                     data-aos="fade-up" data-aos-duration="800">
                <img class="vts__cerco__section__game-bio-engagee__bottle_icon vts__cerco__section__game-bio-engagee__bottle_icon__carton3"
                     src="<?php echo get_stylesheet_directory_uri() . '/img/cerco/5R/5R-composter.svg'; ?>"
                     data-aos="fade-left" data-aos-duration="800">
                <div class="vts__cerco__section__game-bio-engagee__carton__text" data-aos="fade-up"
                     data-aos-duration="800">
                    <?php echo $section4['texte_carton']; ?>
                </div>


            </div>
        </section>
    </div>

<?php

get_footer();