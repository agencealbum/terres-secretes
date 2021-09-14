<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<a class="btn-back" href="<?= get_post_type_archive_link('vins') ?>">X</a>
<div class="row pt-5 pb-5">
    <div class="col-6">
        <div class="sticky-top" style="top: 9rem;">
            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
        </div>
    </div>
    <div class="col-6">
        <figure class="wp-block-image size-large pb-4">
            <img loading="lazy"
                 src="<?= wp_get_attachment_url(80); ?>"
                 alt="" class="wp-image-80"
                 sizes="(max-width: 180px) 100vw, 188px" width="180"
                 height="180">
        </figure>
        <h1 class="fiche-vin-title text-left"><?= get_field('appellation'); ?>&nbsp;<?php the_title(); ?></h1>
        <table class="table">
            <?php if (!empty(get_field('appellation'))): ?>
                <tr>
                    <td>Appellation</td>
                    <th><?= get_field('appellation'); ?></th>
                </tr>
            <?php endif; ?>
            <?php if (!empty(get_field('cepage'))): ?>
                <tr>
                    <td>Cépage</td>
                    <th><?= get_field('cepage'); ?></th>
                </tr>
            <?php endif; ?>
            <?php if (!empty(get_field('millesime'))): ?>
                <tr>
                    <td>Millésime</td>
                    <th><?= get_field('millesime'); ?></th>
                </tr>
            <?php endif; ?>
            <?php if (!empty(get_field('vignes'))): ?>
                <tr>
                    <td>Vignes</td>
                    <th><?= get_field('vignes'); ?></th>
                </tr>
            <?php endif; ?>
        </table>

        <?php get_template_part('partials/degustation'); ?>

        <?php get_template_part('partials/assemblage'); ?>

        <?php get_template_part('partials/charts'); ?>

        <?php get_template_part('partials/description'); ?>

        <?php get_template_part('partials/citation'); ?>

        <div class="align-items-center">
            <?php if (have_rows('fiche_descriptive')): the_row(); ?>
                <?php if (!empty(get_sub_field('lien_fiche_descriptive'))): ?>
                    <a target="_blank" class="btn btn-primary mb-5"
                       href="<?= get_sub_field('lien_fiche_descriptive'); ?>"><?= get_sub_field('text_lien_fiche_descriptive'); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="align-items-center pb-5">
            <?php if (ICL_LANGUAGE_CODE == "fr"): ?>
                <a target="_blank" class="btn btn-primary" href="https://offres.vignerons-associes.com/sale/6">Commander
                    ce vin</a>
            <?php endif; ?>
        </div>
    </div>
</div>