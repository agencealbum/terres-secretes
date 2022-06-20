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

$container = get_theme_mod('understrap_container_type');
?>

<div id="single-wrapper" class="<?php echo $isExceptionnel ? 'single-wrapper-exceptionnel' : ''; ?>">
    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
        <div class="row">
            <!-- Do the left sidebar check -->
            <main class="site-main" id="main">
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('loop-templates/content', 'single'); ?>
                <?php endwhile; ?>
            </main>
        </div>

        <?php if(!$isExceptionnel): ?>
            <div class="row mb-lg-5">
                <div class="col-12">
                    <?php if(ICL_LANGUAGE_CODE == "fr"): ?>
                        <h3 class="text-center">Vous aimerez aussi</h3>
                    <?php else: ?>
                        <h3 class="text-center">You may like</h3>
                    <?php endif ?>
                    <?php get_template_part('partials/carrousselVin'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
if(!$isExceptionnel) {
    get_footer();
} else {
    get_footer('empty');
}
?>
