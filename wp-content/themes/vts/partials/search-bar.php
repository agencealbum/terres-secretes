<?php

/*
Template name: gabarit Liste articles
*/
$argTermes = array(
    'taxonomy' => 'product_tag',
    'hide_empty' => 1,
);
$all_terms = get_categories($argTermes);

if (isset($_GET['tag'])) {
    $tagTS = $_GET['tag'];
    foreach ($all_terms as $term) :

        if ($tagTS == $term->slug) {
            $term_name = $term->name;
        }

    endforeach;
} else {
    $tagTS = array();

    foreach ($all_terms as $term) :

        $term_slug = $term->slug;
        array_push($tagTS, $term_slug);

    endforeach;
}
?>
<div class="searchbar">
    <div class="search-pop">
        <span id="ts-cat-search"><?= __('Rechercher', 'twentyseventeen'); ?> <i class="fas fa-search"></i></span>
        <div id="search-zone" class="search-zone-widget widget-area" role="complementary">
            <span><?= __('Rechercher', 'twentyseventeen'); ?> &nbsp;<i class="fas fa-search"></i></span>
            <!--<?php //dynamic_sidebar( 'search-zone-widget-area' ); ?>-->

            <div class="search-content-widget">
                <div class="tagcloud">
                    <a href="?" style="font-size: 1em;">
                        <?= __('Tous', 'twentyseventeen'); ?>
                    </a>
                    <?php foreach ($all_terms as $term) : ?>

                        <a href="?tag=<? echo $term->slug; ?>" style="font-size: 1em;">
                            <? echo $term->name; ?>
                        </a>

                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
    <div class="clr"></div>
</div>