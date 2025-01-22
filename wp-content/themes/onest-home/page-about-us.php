<?php
/*
Template Name: About us
Template Post Type: page
*/



get_header();

?>


	<main class="site-main">


		<!-- intro -->
		<section class="intro">
			<div class="container">
				<div class="row g-5 align-items-center">

					<?php include locate_template('partials/content/content-page.php'); ?>

					<div class="reviews-content col-12 col-lg-6">
						<?php include locate_template('partials/item/item-reviews.php'); ?>
						<?php include locate_template('partials/item/item-reviews.php'); ?>
						<?php include locate_template('partials/item/item-reviews.php'); ?>
					</div>

				</div>
			</div>
		</section>


		<!-- gallery section -->
		<section class="gallery">
			<div class="gallery-content">

				<?php include locate_template('partials/swiper/swiper-gallery.php'); ?>

			</div>
		</section>


		<!-- additional content -->
		<section class="additional-content">
			<div class="container">
				<div class="additional-content-content">

					<?php

						$crb_additional_content = carbon_get_post_meta( $post->ID, 'crb_additional_content' );

						if ( ! empty( $crb_additional_content ) ) {
							echo wpautop( $crb_additional_content, true );
						} 
					?>

				</div>
			</div>
		</section>


		<!-- lead form -->
		<section class="form-lead bg-white-lotion">
			<div class="container">
				<div class="form-lead-content">

					<h3 class="fw-normal">Lead form</h3>

					<?php include locate_template('partials/form/form-subscribe.php'); ?>

				</div>
			</div>
		</section>


		<!-- product collection -->
		<section class="product-collection">
			<div class="container">
				<div class="product-collection-content row g-4 g-lg-5">

					<h3 class="fw-normal">Title h3</h3>

					<?php include locate_template('partials/item/item-product.php'); ?>
					<?php include locate_template('partials/item/item-product.php'); ?>
					<?php include locate_template('partials/item/item-product.php'); ?>
					<?php include locate_template('partials/item/item-product.php'); ?>
					<?php include locate_template('partials/item/item-product.php'); ?>
					<?php include locate_template('partials/item/item-product.php'); ?>

				</div>
			</div>
		</section>
		

	</main>


<?php
get_footer();
