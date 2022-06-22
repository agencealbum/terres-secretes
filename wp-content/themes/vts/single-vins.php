<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$isExceptionnel = has_term('exceptionnels', 'vins_categories');

if(!$isExceptionnel) {
    get_header();
} else {
    get_header('empty');
}

$cats      = get_the_terms(get_the_ID(), 'vins_categories');
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

$container = get_theme_mod('understrap_container_type');
?>

<div id="single-wrapper">
    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
        <div class="row">
            <!-- Do the left sidebar check -->
            <main class="site-main" id="main">
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('loop-templates/content', 'single'); ?>
                <?php endwhile; ?>
            </main>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <?php if(!$isExceptionnel && $vins->found_posts > 0): ?>
                    <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                        <h3 class="text-center">Vous aimerez aussi</h3>
                    <?php else: ?>
                        <h3 class="text-center">You may like</h3>
                    <?php endif ?>
                <?php endif; ?>
                <?php get_template_part('partials/carrousselVin'); ?>
            </div>
        </div>
    </div>
</div>

<?php
if(!$isExceptionnel) {
    get_footer();
} else {
    get_footer('empty');
}
?>
