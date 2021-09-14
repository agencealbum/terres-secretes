<?php
/*
    Template name: gabarit mentions-legales
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12 font-barlow pt-5 heading">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>