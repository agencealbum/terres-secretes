<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">

			<div class="row">

				<div class="col-md-4 font-barlow pr-5 pt-5 heading">
					<?php the_content(); ?>
				</div>

				<div class="col-md-8 p-0">
					<?php the_post_thumbnail(); ?>
				</div>

			</div>

		</div>

		<?php get_template_part( 'partials/sections' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>