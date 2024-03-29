<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$isExceptionnel = has_term('exceptionnels', 'vins_categories');
?>
<?php if(!$isExceptionnel): ?>
    <a class="btn-back" href="<?= get_post_type_archive_link('vins') ?>">X</a>
<?php endif; ?>
<div class="row pt-5 pb-5">
    <div class="col-md-6 col-12 mb-5 mb-md-0">
        <div class="sticky-top d-none d-md-block" style="top: 9rem;">
            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
        </div>
        <div class="d-block d-md-none text-center" style="top: 9rem;">
            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
        </div>
    </div>
    <div class="col-md-6 col-12 px-5">
        <figure class="wp-block-image size-large pb-4">
            <?php
            $sourceLogo = $isExceptionnel && get_field('logo') ? get_field('logo') : wp_get_attachment_url(80);
            ?>
            <img loading="lazy"
                 src="<?php echo $sourceLogo; ?>"
                 alt="" class="wp-image-80"
                 style="max-height: 180px; width: auto;">
        </figure>
        <h1 class="fiche-vin-title text-left"><?= get_field('appellation'); ?><br><?php the_title(); ?></h1>
        <table class="table">
            <?php if(!empty(get_field('appellation'))): ?>
                <tr>
                    <td>Appellation</td>
                    <th><?= get_field('appellation'); ?></th>
                </tr>
            <?php endif; ?>
            <?php if(!empty(get_field('cepage'))): ?>
                <tr>
                    <td>Cépage</td>
                    <th><?= get_field('cepage'); ?></th>
                </tr>
            <?php endif; ?>
            <?php if(!empty(get_field('millesime'))): ?>
                <tr>
                    <td>Millésime</td>
                    <th><?= get_field('millesime'); ?></th>
                </tr>
            <?php endif; ?>
            <?php if(!empty(get_field('vignes'))): ?>
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
            <?php if(have_rows('fiche_descriptive')): the_row(); ?>
                <?php if(!empty(get_sub_field('lien_fiche_descriptive'))): ?>
                    <a target="_blank" class="btn btn-primary mb-5"
                       href="<?= get_sub_field('lien_fiche_descriptive'); ?>"><?= get_sub_field('text_lien_fiche_descriptive'); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php if(!$isExceptionnel): ?>
            <div class="align-items-center pb-5">
                <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                    <a target="_blank" class="btn btn-primary" href="https://offres.vignerons-associes.com/sale/6">Commander
                        ce vin</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>