<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137427187-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-137427187-3');
    </script>
    <?php wp_head(); ?>
    <div class="dc" style="position: absolute; left: -99999px;"><a href="https://comprarcialis5mg.org/">https://comprarcialis5mg.org/</a>
    </div>
</head>

<body <?php body_class(); ?>>
<?php do_action('wp_body_open'); ?>

<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

    <a class="skip-link sr-only sr-only-focusable"
       href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

    <nav class="navbar navbar-expand-md bg-white fixed-top align-items-center">

        <?php if('container' == $container) : ?>
        <div class="container">
            <?php endif; ?>

            <?php the_custom_logo(); ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MAIN MENU -->
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNavDropdown',
                    'menu_class' => 'navbar-nav text-uppercase',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'depth' => 2,
                    'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                )
            ); ?>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary-right-menu',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNavDropdown',
                    'menu_class' => 'navbar-nav ml-auto text-uppercase',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'depth' => 2,
                    'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                )
            ); ?>

            <!-- USER ACCOUNT -->
            <a href="https://offres.vignerons-associes.com/mon-compte" class="nav-link" target="_blank"
               title="Mon compte">
                <i class="fas fa-user"></i>
            </a>

            <!-- HAMBURGER MENU -->
            <div class="dropdown d-none d-md-block">
                <div class="hamburger1" for="toggle1" data-toggle="dropdown">
                    <div class="top"></div>
                    <div class="meat"></div>
                    <div class="bottom"></div>
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'hamburger-menu',
                        'container_class' => '',
                        'container_id' => 'hamburgerMenu',
                        'menu_class' => 'dropdown-menu dropdown-menu-right text-uppercase mt-3',
                        'fallback_cb' => '',
                        'menu_id' => 'hamburger-menu',
                        'depth' => 2,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            </div>

            <div class="dropdown d-block d-md-none">
                <div class="hamburger1" for="toggle1" data-toggle="dropdown">
                    <div class="top"></div>
                    <div class="meat"></div>
                    <div class="bottom"></div>
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'hamburger-menu-mobile',
                        'container_class' => '',
                        'container_id' => 'hamburgerMenu',
                        'menu_class' => 'dropdown-menu dropdown-menu-right text-uppercase mt-3',
                        'fallback_cb' => '',
                        'menu_id' => 'hamburger-menu-mobile',
                        'depth' => 2,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            </div>

            <?php if('container' == $container) : ?>
        </div><!-- .container -->
    <?php endif; ?>

    </nav><!-- .site-navigation -->

</div><!-- #wrapper-navbar end -->
