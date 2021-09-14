<?php

	$post = get_post( 33 ); // Bandeau nuiton beaunoy

?>

<section class="promo">
	<div class="container-fluid p-0 m-0">
		<div class="row display-flex">
			<div class="col-md-6 px-0 py-0">
                <img class="promo-img" src="<?=get_the_post_thumbnail_url(33)?>"/>
			</div>
			<div class="col-md-6 pb-3 pt-4">
				<?php echo apply_filters( 'the_content', $post->post_content ); ?>
                <a target="_blank" class="nuiton-link" href="https://nuiton-beaunoy.fr/">VISITER LE SITE</a>
			</div>
		</div>
	</div>
</section>