<?php
while (have_rows('description')) : the_row();
    ?>
    <div id="description">
        <div class="pb-3">
            <h5> <?= get_sub_field('titre') ?></h5>
            <p>
                <?= get_sub_field('paragraphe') ?>
            </p>
        </div>
    </div>
<?php endwhile; ?>
