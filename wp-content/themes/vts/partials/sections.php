<?php

if (have_rows('sections')):

    $key = 0;

    // Loop through rows.
    while (have_rows('sections')) : the_row();

        ?>

        <div class="container my-5 py-5 py-md-0 my-md-0">

            <div class="row align-items-center" data-aos="fade-up">

                <div class="col-md-6 <?= ($key % 2 == 1) ? 'order-md-last offset-md-1' : ''; ?> p-0">

                    <?php if (get_sub_field('lien')) : ?>
                    <a href="<?= get_sub_field('lien'); ?>">
                        <?php endif; ?>

                        <?php if (get_sub_field('image_1')['url'] && get_sub_field('image_2')['url']) : ?>
                            <div data-aos="flip-left" data-aos-anchor-placement="center-bottom"
                                 class="home-image-square"
                                 style="background-image: url('<?= get_sub_field('image_1', 'medium')['url']; ?>');"></div>
                        <?php else : ?>
                            <img data-aos="flip-left" src="<?= get_sub_field('image_1', 'large')['url']; ?>">
                        <?php endif; ?>

                        <?php if (get_sub_field('image_2')['url']) : ?>
                            <div class="home-image-square"
                                 style="background-image: url('<?= get_sub_field('image_2', 'medium')['url']; ?>');"></div>
                        <?php endif; ?>

                        <?php if (get_sub_field('image_3')['url']) : ?>
                            <div data-aos="flip-right" data-aos-anchor-placement="top-bottom" class="home-image-square"
                                 style="background-image: url('<?= get_sub_field('image_3', 'medium')['url']; ?>');"></div>
                        <?php endif; ?>

                        <?php if (get_sub_field('image_4')['url']) : ?>
                            <div data-aos="flip-down" data-aos-anchor-placement="center-bottom"
                                 class="home-image-square"
                                 style="background-image: url('<?= get_sub_field('image_4', 'medium')['url']; ?>');"></div>
                        <?php endif; ?>

                        <?php if (get_sub_field('lien')) : ?>
                    </a>
                <?php endif; ?>
                </div>
                <div class="col-md-5 <?= ($key % 2 == 1) ? 'order-md-first' : 'offset-md-1'; ?>">
                    <?php if (get_sub_field('logo')) : ?>
                        <img src="<?= get_sub_field('logo')?>" alt=""/>
                    <?php endif; ?>
                    <h2><?php the_sub_field('titre'); ?></h2>

                        <?php the_sub_field('texte'); ?>
                        <?php if (get_sub_field('lien')) : ?>
                            <a href="<?= get_sub_field('lien'); ?>"
                               class="btn btn-primary"><?php the_sub_field('texte_du_bouton'); ?></a>
                        <?php endif; ?>
                </div>

            </div>

        </div>

        <?php

        $key++;

        // End loop.
    endwhile;

endif;

?>
