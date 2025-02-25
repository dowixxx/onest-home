<?php
/*
Template Name: Construction
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

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="img-wrapper col-12 col-lg-6">
							<?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid w-100' ) ); ?>
						</div>
					<?php endif; ?>

				</div>

			</div>
		</section>


		<!-- pitch -->
		<section class="pitch border-top border-bottom">
			<div class="container">
				<div class="pitch-content d-flex flex-column flex-md-row text-center justify-content-between">
					<p class="mb-0"><?php _e('Ekspertizė gyvenamuosiuose projektuose', 'onest-home'); ?></p>
					<p class="mb-0"><?php _e('Personalizuotas požiūris', 'onest-home'); ?></p>
					<p class="mb-0"><?php _e('Pilni sprendimai nuo pradžios iki pabaigos', 'onest-home'); ?></p>
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


		<!-- project collection -->
		<section class="project-collection overflow-hidden">
			<div class="container">
				<div class="project-collection-content">

					<h3 class="fw-normal"><?php _e( 'Įgyvendinti projektai', 'onest-home' ) ?></h3>

					<div class="my-swiper-wrapper">

						<!--swiper -->
						<div class="swiper swiper-project overflow-visible">
							<div class="swiper-wrapper">

								<?php
								$loop = new WP_Query( array(
									'post_type'      => 'project', 
									'posts_per_page' => -1,       
									'order'          => 'DESC',    
									'orderby'        => 'date',   
								));

								if ( $loop->have_posts() ) : 
									while ( $loop->have_posts() ) : 

										$loop->the_post();
								?>
										<div class="swiper-slide">
								<?php
											include locate_template('partials/item/item-project.php');
								?>
										</div>
								<?php

									endwhile; 
								endif; 
								wp_reset_postdata(); 
								?>

							</div>
						</div>

						<!-- navigation -->
						<div class="my-swiper-btn-wrapper d-flex">

							<div class="swiper-button-prev my-swiper-btn position-static">
								<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
								</svg>
							</div>

							<div class="swiper-button-next my-swiper-btn position-static">
								<svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
								</svg>
							</div>

						</div>

						<!-- <div class="swiper-pagination swiper-project-pagination position-static"></div> -->

					</div>

				</div>
			</div>
		</section>


		<!-- lead form -->
		<section id="form-lead" class="form-lead bg-white-lotion mb-0">
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


	</main>
	

<?php
get_footer();
