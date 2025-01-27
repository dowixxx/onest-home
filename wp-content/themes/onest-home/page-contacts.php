<?php
/*
Template Name: Contacts
Template Post Type: page
*/



$phone_number = carbon_get_theme_option( 'crb_phone_number' );
$email_address = carbon_get_theme_option( 'crb_email_address' );
$working_hours = carbon_get_theme_option( 'crb_working_hours' );
$media_gallery = carbon_get_post_meta( get_the_ID(), 'crb_media_gallery' );



get_header();

?>


	<main class="site-main">


		<!-- intro -->
		<section class="intro">
			<div class="container">
				<div class="row g-5 align-items-center">

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="img-wrapper col-12 col-lg-6">
							<?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid w-100' ) ); ?>
						</div>
					<?php endif; ?>

					<?php include locate_template('partials/content/content-page.php'); ?>

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
								<a href="tel:<?php echo esc_html( $phone_number ) ?>" title="<?php echo esc_html( $phone_number ) ?>"><?php echo esc_html( $phone_number ) ?></a>
							</div>

							<div>
								<p class="mb-0 text-uppercase"><?php _e('El. paštas', 'onest-home'); ?></p>
								<a href="mailto:<?php echo esc_html( $email_address ) ?>" title="<?php echo esc_html( $email_address ) ?>"><?php echo esc_html( $email_address ) ?></a>
							</div>

							<div>
								<p class="mb-0 text-uppercase"><?php _e('Darbo valandos', 'onest-home'); ?></p>
								<p><?php echo esc_html( $working_hours ) ?></p>
							</div>

						</div>
					</div>

					<!-- reviews section -->
					<div class="reviews col-12 col-lg-6">
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

				</div>
			</div>
		</div>


		<!-- lead form -->
		<section class="form-lead bg-white-lotion mb-0">
			<div class="container">
				<div class="form-lead-content">

					<h3 class="fw-normal">Lead form</h3>

					<?php include locate_template('partials/form/form-subscribe.php'); ?>

				</div>
			</div>
		</section>
		

		<!-- gallery section -->
		<?php if ( ! empty( $media_gallery ) ) : ?>
		<section class="gallery mt-0">
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


	</main>


<?php
get_footer();
