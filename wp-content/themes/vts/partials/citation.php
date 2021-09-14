<?php
while (have_rows('citation')) : the_row();
    if (!empty(get_sub_field('paragraphe'))):
        ?>
        <div id="citation">
            <div class="pb-3">
                <blockquote><?= get_sub_field('paragraphe') ?></blockquote>
                <span class="auteur"><?= get_sub_field('auteur') ?></span>
            </div>
        </div>
    <?php endif;
endwhile; ?>