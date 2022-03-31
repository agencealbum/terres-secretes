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

<div class="container pt-5">

    <div class="row">

        <div class="col-md-9 order-md-1 order-2">
            <?php get_template_part('template-parts/post/content', get_post_format()); ?>
        </div><!-- col -->
        <div class="col-md-3 order-md-2 order-1 text-right">
            <div class="single_post_cross" onclick="history.go(-1)">
                &times;
            </div>
        </div>

    </div><!-- row -->

</div><!-- container -->

<?php get_footer(); ?>
