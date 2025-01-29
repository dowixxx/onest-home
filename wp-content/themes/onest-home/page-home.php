<?php
/*
Template Name: Homepage
Template Post Type: page
*/



get_header();
?>


	<main class="site-main">


		<!-- hero section -->
		<section class="hero m-0">
			<div class="hero-content">

				<div class="my-swiper-wrapper position-relative">
					<!--swiper -->
					<div class="swiper swiper-hero">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="swiper-item h-100">

									<div class="container position-relative">
										<div class="position-absolute top-0 bottom-0 my-auto">
											<h1 class="text-white">labas</h1>
											<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro molestias ratione, unde quaerat nobis animi repudiandae eos. Similique nobis, exercitationem dolorum, veniam recusandae numquam, dolore reiciendis consectetur assumenda fugit eos.</p>
											<button class="btn btn-primary mt-2 text-uppercase">primary</button>
										</div>
									</div>
									
									<div class="img-wrapper h-100">
										<img class="" 
											src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-img.jpg" 
											alt="" 
											decoding="async" loading="lazy">
									</div>

								</div>
							</div>

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

					</div>

					<!-- <div class="swiper-pagination swiper-hero-pagination position-static"></div> -->
					
				</div>

			</div>
		</section>


		<!-- product collection -->
		<section class="product-collection">
			<div class="container">
				<div class="product-collection-content border-bottom">

					<div class="row g-4 g-lg-5">
						<?php include locate_template('partials/item/item-product.php'); ?>
						<?php include locate_template('partials/item/item-product.php'); ?>
						<?php include locate_template('partials/item/item-product.php'); ?>
						<?php include locate_template('partials/item/item-product.php'); ?>
						<?php include locate_template('partials/item/item-product.php'); ?>
						<?php include locate_template('partials/item/item-product.php'); ?>
					</div>

				</div>
			</div>
		</section>


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
