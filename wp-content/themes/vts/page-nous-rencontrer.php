<?php
/*
Template name: gabarit nous-rencontrer
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
        <div id="nousRencontrer">
            <div class="row pb-5">
                <div class="col">
                    <?= the_content() ?>
                </div>
                <div class="col">
                    <?= the_post_thumbnail(); ?>
                    <?php if (have_rows('images')): ?>
                        <?php while (have_rows('images')): the_row();
                            $row = get_row(true); ?>
                            <img src="<?= $row['image']['url']; ?>"/>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();