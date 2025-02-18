<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package onest-home
 */

get_header();
?>

	<main class="site-main">

		<section class="">
			<div class="container">
				<div class="">

					<h2><?php the_title() ?></h2>

					<?php the_content() ?>

				</div>
			</div>
		</section>

	</main>

<?php
get_footer();
