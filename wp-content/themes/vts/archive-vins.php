<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

$cat_args = array(
    'taxonomy' => 'vins_categories',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$cats = get_categories($cat_args);

get_header();

?>

    <div class="container mt-5">
        <header class="page-header">
            <figure class="wp-block-image size-large pb-4">
                <img loading="lazy"
                     src="<?= wp_get_attachment_url(80); ?>"
                     alt="" class="wp-image-80"
                     sizes="(max-width: 180px) 100vw, 180px" width="180"
                     height="180">
            </figure>
        </header>


        <div class="searchbar">
            <span id="ts-cat-search">
                <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                    Rechercher&nbsp;
                <?php else: ?>
                    Search
                <?php endif; ?>
                <i class="fas fa-search"></i></span>
            <div id="search-zone" class="search-zone-widget widget-area" role="complementary">
                <span><?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                        Rechercher&nbsp;
                    <?php else: ?>
                        Search
                    <?php endif; ?><i class="fas fa-search"></i></span>
                <div class="search-content-widget">
                    <div class="tagcloud">
                        <a href="<?= get_post_type_archive_link('vins'); ?>" style="font-size: 1em;">
                            <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                                Tous&nbsp;
                            <?php else: ?>
                                All
                            <?php endif; ?>
                        </a>
                        <?php foreach($cats as $term) : ?>
                            <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                                <a href="/vins_categories/<?php echo $term->slug; ?>" style="font-size: 1em;"></a>
                            <?php else: ?>
                                <a href="/en/vins_categories/<?php echo $term->slug; ?>" style="font-size: 1em;"></a>
                            <?php endif; ?>
                            <?php echo $term->name; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php $i = 0;
        foreach($cats as $cat) :

            $vins = new WP_Query(
                array(
                    'post_type' => 'vins',
                    'vins_categories' => $cat->slug
                )
            );
            ?>

            <?php if($vins->have_posts()) : ?>

            <div class="container-fluid section-vins aos-init aos-animate <?= ($i === 0) ? 'border-top' : ''; ?>"
                 data-aos="fade-up"
                 data-aos-duration="500" data-aos-anchor-placement="center-bottom">
                <h2><?= $cat->name; ?></h2>
                <div class="row border-right-1" style="padding-top: 4rem">
                    <div class="col-md-3">
                        <div class="mb-5">
                            <?= category_description($cat->term_id); ?>
                        </div>
                        <div class="bottom-0">
                            <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                                <a target="_blank" href="https://offres.vignerons-associes.com/sale/6"
                                   class="btn btn-primary">Commander nos vins</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div id="recipeCarousel<?= $cat->term_id; ?>" class="carousel slide w-100"
                            <?php echo $vins->post_count > 3 ? 'data-ride="carousel"' : ''; ?>>
                            <div class="carousel-inner w-100" role="listbox">
                                <?php $counter = 0;
                                while($vins->have_posts()) : $vins->the_post(); ?>
                                    <div class="carousel-item <?= ($counter === 0) ? 'active' : ''; ?> ">
                                        <div class="col-md-4 text-center border-right-2">
                                            <a class="vin-link" href="<?= get_post_permalink(); ?>">
                                                <img style="max-height: 40vh; width: auto;"
                                                     src="<?= the_post_thumbnail_url('medium'); ?>">
                                                <div class="vin-block d-block mt-2 <?php
                                                switch(get_field('couleur')):
                                                    case "Blanc":
                                                        echo "vin-blanc";
                                                        break;
                                                    case "Rouge":
                                                        echo "vin-rouge";
                                                        break;
                                                    case "Rosé":
                                                        echo "vin-rose";
                                                        break;
                                                    case "Crémant":
                                                        echo "vin-cremant";
                                                        break;
                                                    default:
                                                        echo "";
                                                        break;
                                                endswitch;
                                                ?>">
                                                    <div class="vin-appellation"><?= get_field('appellation'); ?></div>
                                                    <div class="vin-title"><?php the_title(); ?></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php $counter++;
                                endwhile; ?>
                            </div>
                        </div>
                        <?php if($vins->post_count > 3) : ?>
                            <div class="float-right">
                                <a class="carousel-control-next w-auto" href="#recipeCarousel<?= $cat->term_id; ?>"
                                   role="button" data-slide="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                         class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endif;
            wp_reset_query();
            $i++;
        endforeach; ?>
    </div>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
<?php get_template_part('partials/promo'); ?>


<?php get_footer(); ?>