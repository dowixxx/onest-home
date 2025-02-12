<?php
/*
Template Name: Homepage
Template Post Type: page
*/



$hero_slides = carbon_get_the_post_meta('crb_hero_slider');



get_header();
?>


	<main class="site-main">


		<!-- hero section -->
		<section class="hero m-0">
			<div class="hero-content">

				<div class="my-swiper-wrapper position-relative z-0">
					<!--swiper -->
					<div class="swiper swiper-hero">
						<div class="swiper-wrapper">

						<?php 
						foreach ($hero_slides as $slide) : 

							$slide_image_url = wp_get_attachment_image_url( $slide['slide_image'], 'full' );
							$slide_title = $slide['slide_title'];
							$button_text = $slide['button_text'];
							$button_url = $slide['button_url'];
						?>

							<div class="swiper-slide">
								<div class="swiper-item h-100">

									<div class="container d-flex h-100">
										<div class="my-auto">

											<h1 class="text-white">
												<?php echo esc_html( $slide_title ) ?>
											</h1>

											<a href="<?php echo esc_html( $button_url ) ?>" 
												class="btn btn-primary bg-transparent border-white text-uppercase" 
												title="<?php echo esc_html( $button_text ) ?>">
												<?php echo esc_html( $button_text ) ?>
											</a>

										</div>
									</div>
									
									<div class="img-wrapper h-100 position-absolute top-0 bottom-0 start-0 end-0 m-auto w-100 z-n1">
										<div class="bg-black position-absolute w-100 h-100 opacity-25"></div>
										<img class="" 
											src="<?php echo esc_url( $slide_image_url ); ?>" 
											alt="" 
											fetchpriority="high" loading="eager" decoding="async">
									</div>

								</div>
							</div>

						<?php 
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
					<!-- <div class="my-swiper-btn-wrapper d-flex position-absolute top-0 bottom-0 m-0 justify-content-between w-100 align-items-center">

						<div class="swiper-button-prev my-swiper-btn position-static ms-4">
							<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
							</svg>
						</div>

						<div class="swiper-button-next my-swiper-btn position-static me-4">
							<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
							</svg>
						</div>

					</div> -->

					<div class="container">
						<div class="position-relative">
							<div class="swiper-pagination swiper-hero-pagination"></div>
						</div>
					</div>
					
				</div>

			</div>
		</section>


		<!-- product collection -->
		<section class="product-collection">
			<div class="container">
				<div class="product-collection-content">

					<!-- <div class="row g-4 g-lg-5"> -->
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
					<!-- </div> -->

				</div>
			</div>
		</section>


		<!-- divider -->
		<div class="container">
			<div class="divider"></div>
		</div>


		<!-- reviews section -->
		<section class="reviews">
			<div class="container">
				<div class="reviews-content">

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
		</section>
		


	</main>
	

<?php
get_footer();
