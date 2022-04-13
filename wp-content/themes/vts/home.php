<?php
get_header(); ?>

<style>

    article {
        margin: 0 0 5rem 100px;
        padding: 0;
    }

    article .post-thumbnail img {
        width: 100%;
        height: auto;
        max-height: none;
    }

</style>


<section>

    <div class="container pt-5 my-5">

        <div class="row text-center mb-3">

            <div class="col-md-12">
                <h1><?php single_post_title(); ?></h1>

                <hr>

            </div>

        </div>

    </div>

</section>


<?php


$categories = get_categories(array(
                                 'orderby' => 'name',
                                 'parent' => 0
                             ));
?>

<div class="container">

    <div class="row">

        <div class="col-md-2 d-none d-md-block"></div>
        <div class="col-md-8">            <!--<p>Actualités.php</p>-->

            <?php
            if(have_posts()) :

                /* Start the Loop */
                while(have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/post/content', get_post_format());

                endwhile;

                the_posts_pagination(
                    array(
                        'prev_text' => '<span class="screen-reader-text">' . __('Previous page', 'twentyseventeen') . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __('Next page', 'twentyseventeen') . '</span>',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyseventeen') . ' </span>',
                    )
                );
            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>

        </div><!-- col -->
        <div class="col-md-2 d-none d-md-block"></div>

    </div><!-- row -->

</div><!-- container -->

<?php get_footer(); ?>
