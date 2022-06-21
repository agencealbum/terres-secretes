<?php


$cats = get_the_terms(get_the_ID(), 'vins_categories');

$catsSlugs = array();

foreach($cats as $oneCat) {
    $catsSlugs[] = $oneCat->slug;
}

$vins = new WP_Query(
    array(
        'post_type' => 'vins',
        'tax_query' => array(
            array(
                'taxonomy' => 'vins_categories',
                'field' => 'slug',
                'terms' => $catsSlugs,
            ),
        ),
        'post__not_in' => array(get_the_ID())
    )
);


if($vins->found_posts > 0):
?>
<div class="carousel slide w-100 border border-white" data-ride="carousel">
    <div class="carousel-inner w-100 py-5 px-2" role="listbox">

        <?php $counter = 0;
        while($vins->have_posts()) : $vins->the_post(); ?>
            <div class="carousel-item <?= ($counter === 0) ? 'active' : ''; ?>">
                <div class="col-md-4 text-center">
                    <a href="<?= get_post_permalink(); ?>">
                        <img style="max-height: 40vh; width: auto;" src="<?= the_post_thumbnail_url('medium'); ?>">
                        <div class="vin-block-spe d-block mt-2 <?php
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
            <?php $counter++; endwhile; ?>
    </div>
</div>
<?php endif; ?>
<div class="row" id="nos-vins-link">
    <div class="col-md-4 offset-md-4 justify-content-between align-items-center">
        <a class="border-background btn btn-primary" style="margin-left: 3.2rem"
           href='<?php echo get_post_type_archive_link('vins'); ?>'>
            <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                Voir tous nos vins
            <?php else: ?>
                See all our wines
            <?php endif; ?>
        </a>
    </div>
</div>