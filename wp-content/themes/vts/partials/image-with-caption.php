<div class="imgcontainer">
    <?php if (have_rows('images')):
        while (have_rows('images')): the_row();
            $row = get_row(true); ?>
            <div class="imgs<?= get_row_index(); ?>" class="aos-init aos-animate"
                 data-aos="flip-left" data-aos-anchor-placement="center-bottom">
                <div class="image-caption"> ><?= $row['image']['title']?><br/><?= $row['image']['caption']; ?></div>
                <img src="<?= $row['image']['url']; ?>" style="width: 100%"/>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>