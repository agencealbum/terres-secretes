<?php
while (have_rows('degustation')) : the_row();
    ?>
<div id="degustation">
    <h5>
        <?= get_sub_field('titre'); ?>
    </h5>
    <p>
        <?= get_sub_field('paragraphe') ?>
    </p>
</div>
<?php endwhile; ?>
