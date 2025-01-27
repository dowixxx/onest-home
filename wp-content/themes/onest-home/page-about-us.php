<?php
/*
Template Name: About us
Template Post Type: page
*/



$media_gallery = carbon_get_post_meta( get_the_ID(), 'crb_media_gallery' );



get_header();

?>


	<main class="site-main">


		<!-- intro -->
		<section class="intro">
			<div class="container">
				<div class="row g-5 align-items-center">

					<?php include locate_template('partials/content/content-page.php'); ?>

					<div class="reviews-content col-12 col-lg-6">

						<?php
						$loop = new WP_Query( array(
							'post_type'      => 'review', 
							'posts_per_page' => -1,       
							'order'          => 'DESC',    
							'orderby'        => 'date',   
						));

						if ( $loop->have_posts() ) : 
							while ( $loop->have_posts() ) : 

								$loop->the_post();
								include locate_template('partials/item/item-reviews.php');

							endwhile; 
						endif; 
						wp_reset_postdata(); 
						?>
						
					</div>

				</div>
			</div>
		</section>


		<!-- gallery section -->
		<?php if ( ! empty( $media_gallery ) ) : ?>
		<section class="gallery">
			<div class="gallery-content">
				<div class="my-swiper-wrapper">
					<!--swiper -->
					<div class="swiper swiper-gallery">
						<div class="swiper-wrapper">

						<?php 
						foreach ( $media_gallery as $media_id ) : 

							$mime_type = get_post_mime_type( $media_id );
							$image_url = wp_get_attachment_image_url( $media_id, 'full' );
							$image_alt = get_post_meta( $media_id, '_wp_attachment_image_alt', true ) ?: '';

							if ( strpos( $mime_type, 'image' ) !== false ) :
						?>

								<div class="swiper-slide">
									<div class="swiper-item">
										<div class="img-wrapper">
											<img class="img-fluid" 
												src="<?php echo esc_url( $image_url ); ?>" 
												alt="<?php echo esc_attr( $image_alt ) ?>" 
												decoding="async" loading="lazy">
										</div>
									</div>
								</div>

						<?php 
							endif;
						endforeach; 
						?>

							<!-- <div class="gallery-item video">
								<video controls>
									<source src="" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div> -->
							
						</div>
					</div>

					<div class="swiper-pagination swiper-gallery-pagination position-static"></div>
					
				</div>
			</div>
		</section>
		<?php endif; ?>


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
