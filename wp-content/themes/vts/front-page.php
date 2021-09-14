<?php
/*
    Template name: gabarit front-page
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>

<?php while(have_posts()) : the_post(); ?>

    <div class="container">

        <div class="row">

            <div class="col-md-4 font-barlow pr-5 pt-5 heading">
                <?php the_content(); ?>
            </div>

            <div class="col-md-8 p-0" style="background: no-repeat url('<?= the_post_thumbnail_url(); ?>') ;">
                <div class="bandeau-revelis">
                    <?php
                    if(have_rows('images_bandeau')) :
                        while(have_rows('images_bandeau')) : the_row();
                            $imageUrl = get_sub_field('image');
                            $lien     = get_sub_field('lien');
                            ?>
                            <a href="<?= $lien; ?>">
                                <img class="img-bandeau" src="<?= $imageUrl; ?>">
                            </a>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <!--                    <div class="bandeau-revelis">-->
                <!--                        <a href="https://vignerons-associes.com/du-15-juin-au-15-septembre-exposition-dali-a-la-cave-de-prisse/?frompopup=1&ref=ts">-->
                <!--                            <img class="img-bandeau" src="-->
                <? //=wp_get_attachment_url(925); ?><!--">-->
                <!--                        </a>-->
                <!--                        <a href="https://vignerons-associes.com/actualites/?setcookie=done/#grands-prix-de-la-revue-du-vin-de-france-2021/">-->
                <!--                            <img class="img-bandeau" src="-->
                <? //=wp_get_attachment_url(426); ?><!--">-->
                <!--                        </a>-->
                <!--                    </div>-->
            </div>
        </div>

    </div>

    </div>

    <?php get_template_part('partials/sections'); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>