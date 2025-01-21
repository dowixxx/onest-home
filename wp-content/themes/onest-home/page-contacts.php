<?php
/*
Template Name: Contacts
Template Post Type: page
*/



get_header();

?>


	<main class="site-main">


		<!-- about us -->
		<section class="contacts">
			<div class="container">
				<div class="row g-5">

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="img-wrapper col-12 col-lg-6">
							<?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid w-100' ) ); ?>
						</div>
					<?php endif; ?>

					<div class="contacts-content col-12 col-lg-6">

						<h1 class="fw-normal text-uppercase">
							<?php the_title(); ?>
						</h1>

						<?php the_content(); ?>

						<button class="btn btn-primary">Susisiekti</button>
						<button class="btn btn-secondary">Susisiekti</button>

					</div>

				</div>
			</div>
		</section>
		

		<!-- divider -->
		<div class="container">
			<div class="divider border-top"></div>
		</div>


		<div class="reviews-contact-info-wrapper">
			<div class="container">
				<div class="row g-5 align-items-center">

					<!-- contact info section -->
					<div class="contact-info col-12 col-lg-6">
						<div class="contact-info-content text-center d-flex flex-column">

							<div>
								<p class="title mb-0 text-uppercase fw-semibold"><?php _e('SUSISIEKITE', 'onest-home'); ?></p>
							</div>

							<div>
								<p class="mb-0 text-uppercase"><?php _e('Telefonas', 'onest-home'); ?></p>
								<a href="tel:+37069538586" title="+370 695 385 86">+370 695 385 86</a>
							</div>

							<div>
								<p class="mb-0 text-uppercase"><?php _e('El. paštas', 'onest-home'); ?></p>
								<a href="mailto:info@onesthome.lt" title="info@onesthome.lt">info@onesthome.lt</a>
							</div>

							<div>
								<p class="mb-0 text-uppercase"><?php _e('Darbo valandos', 'onest-home'); ?></p>
								<p>I - IV 07:30 - 16:30; V 07:30 - 15:15</p>
							</div>

						</div>
					</div>

					<!-- reviews section -->
					<div class="reviews col-12 col-lg-6">
						<div class="reviews-content">

							<div class="reviews-item">
								<div class="star-collection d-flex">
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
								</div>
								<p class="title fw-medium text-uppercase">Natalie Haugen</p>
								<p class="text mb-0">Odio aenean sed adipiscing diam. Placerat in egestas erat imperdiet sed euismod nisi. Eros in cursus turpis massa. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper</p>
							</div>

							<div class="reviews-item">
								<div class="star-collection d-flex">
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
								</div>
								<p class="title fw-medium text-uppercase">Natalie Haugen</p>
								<p class="text mb-0">Odio aenean sed adipiscing diam. Placerat in egestas erat imperdiet sed euismod nisi. Eros in cursus turpis massa. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper</p>
							</div>

							<div class="reviews-item">
								<div class="star-collection d-flex">
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
									<div class="star svg-wrapper">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.61 16.02">
											<path d="M8.22,1.15,10,6.53l5.56,0L11.05,9.78l1.69,5.31L8.22,11.73,3.77,15.09,5.39,9.81,1,6.59l5.49-.1Z" fill="#f4c272"></path>
										</svg>
									</div>
								</div>
								<p class="title fw-medium text-uppercase">Natalie Haugen</p>
								<p class="text mb-0">Odio aenean sed adipiscing diam. Placerat in egestas erat imperdiet sed euismod nisi. Eros in cursus turpis massa. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper</p>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>


		<!-- lead form -->
		<section class="form-lead bg-white-lotion mb-0">
			<div class="container">
				<div class="form-lead-content">

					<h3 class="fw-normal mb-0">Lead form</h3>

					<form>
						<div class="label-input-wrapper">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" required>
						</div>
						<div class="label-input-wrapper form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary text-uppercase">Submit</button>
					</form>

				</div>
			</div>
		</section>
		

		<!-- gallery section -->
		<section class="gallery mt-0">
			<!-- <div class="container"> -->
				<div class="gallery-content">

					<div class="my-swiper-wrapper">
						<!--swiper -->
						<div class="swiper swiper-gallery">
							<div class="swiper-wrapper">

								<div class="swiper-slide">
									<div class="swiper-item">
										<div class="img-wrapper">
											<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-img.jpg" alt="" decoding="async" loading="lazy">
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="swiper-item">
										<div class="img-wrapper">
											<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-img.jpg" alt="" decoding="async" loading="lazy">
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="swiper-pagination swiper-gallery-pagination position-static"></div>
					</div>

				</div>
			<!-- </div> -->
		</section>


	</main>


<?php
get_footer();
