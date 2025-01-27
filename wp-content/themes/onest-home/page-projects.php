<?php
/*
Template Name: Projects
Template Post Type: page
*/



get_header();
?>


	<main class="site-main">

		<section class="portfolio">
			<div class="container">
				<div class="portfolio-content">

					<h1 class="title fw-normal text-uppercase text-center text-lg-start">
						<?php the_title() ?>
					</h1>

					<div class="portfolio-collection row g-4">
						<?php include locate_template('partials/item/item-portfolio.php'); ?>
						<?php include locate_template('partials/item/item-portfolio.php'); ?>
						<?php include locate_template('partials/item/item-portfolio.php'); ?>
					</div>

				</div>
			</div>
		</section>

	</main>
	

<?php
get_footer();
