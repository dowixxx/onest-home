<?php
/*
Template Name: Contacts
Template Post Type: page
*/



$phone_number = carbon_get_theme_option( 'crb_phone_number' );
$email_address = carbon_get_theme_option( 'crb_email_address' );
$working_hours = carbon_get_theme_option( 'crb_working_hours' );



get_header();

?>


	<main class="site-main">


		<!-- intro -->
		<section class="intro">
			<div class="container">
				<div class="row g-5">

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

							<?php include locate_template('partials/item/item-reviews.php'); ?>
							<?php include locate_template('partials/item/item-reviews.php'); ?>
							<?php include locate_template('partials/item/item-reviews.php'); ?>

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
		<section class="gallery mt-0">
			<div class="gallery-content">

				<?php include locate_template('partials/swiper/swiper-gallery.php'); ?>

			</div>
		</section>


	</main>


<?php
get_footer();
