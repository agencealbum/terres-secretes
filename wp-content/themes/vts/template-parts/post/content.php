<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if('post' === get_post_type()) {
            echo '<div class="entry-meta">';
            echo get_the_date('d M Y');
            echo '</div><!-- .entry-meta -->';
        };

        if(is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<a href="' . get_the_permalink() . '"><h1 class="entry-title">', '</h1></a>');
        }

        ?>
    </header><!-- .entry-header -->

    <?php if('' !== get_the_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
