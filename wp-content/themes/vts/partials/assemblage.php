<?php if (!empty(get_field('assemblages_titres'))): ?>
    <div id="assemblage">
        <h5>
            <?= get_field('assemblages_titres') ?>
        </h5>
        <ul>
            <?php while (have_rows('assemblages_liste')) : the_row(); ?>
                <li>
                    <?= get_sub_field('assemblage') ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>