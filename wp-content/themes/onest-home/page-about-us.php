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

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="img-wrapper col-12 col-lg-6">
							<?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid w-100' ) ); ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</section>


		<!-- reviews section -->
		<section class="reviews">
			<div class="container">
				<div class="reviews-content d-flex flex-wrap justify-content-between">

					<?php
					$loop = new WP_Query( array(
						'post_type'      => 'review', 
						'posts_per_page' => -1,       
						'order'          => 'ASC',    
						'orderby'        => 'title',   
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
		</section>


		<!-- gallery section -->
		<?php if ( ! empty( $media_gallery ) ) : ?>
		<section class="gallery">
			<div class="gallery-content">
				<div class="my-swiper-wrapper position-relative">
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
											<img class="img-fluid w-100" 
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

					<!-- navigation -->
					<div class="my-swiper-btn-wrapper d-flex position-absolute top-0 bottom-0 m-0 justify-content-between w-100 align-items-center">

						<div class="swiper-button-prev my-swiper-btn position-static ms-4 mb-5">
							<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
							</svg>
						</div>

						<div class="swiper-button-next my-swiper-btn position-static me-4 mb-5">
							<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
							</svg>
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
		<section id="form-lead" class="form-lead bg-white-lotion">
			<div class="container">
				<div class="form-lead-content">

					<h3 class="fw-normal"><?php _e('Parašykite mums', 'onest-home'); ?></h3>

					<div id="my-fluentform-wrapper">
						<?php 
						if ( pll_current_language() === 'lt' ) :
							echo do_shortcode('[fluentform id="4"]');
						endif 
						?>

						<?php 
						if ( pll_current_language() === 'en' ) :
							echo do_shortcode('[fluentform id="3"]');
						endif 
						?>
					</div>

				</div>
			</div>
		</section>


		<!-- product collection -->
		<section class="product-collection">
			<div class="container">
				<div class="product-collection-content">

					<h3 class="fw-normal"><?php _e('Mūsų produktai', 'onest-home'); ?></h3>

					<ul class="products columns-4 row g-4 g-lg-5">

						<?php
						// WooCommerce Product Query
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => -1, 
							'orderby' => 'date',
							'order' => 'ASC'
						);

						$loop = new WP_Query($args);

						if ($loop->have_posts()) :
							while ($loop->have_posts()) : $loop->the_post();
								wc_get_template_part('content', 'product'); // Uses WooCommerce template
							endwhile;
							wp_reset_postdata();
						else :
							echo '<p>No products found</p>';
						endif;
						?>

					</ul>

				</div>
			</div>
		</section>
		

	</main>


<?php
get_footer();
