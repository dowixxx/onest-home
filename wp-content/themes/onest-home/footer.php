<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onest-home
 */



$logo_image = carbon_get_theme_option('crb_logo');
if ( $logo_image ) :
	$logo_image_url = wp_get_attachment_image_url( $logo_image, 'full' );
	$logo_image_alt = get_post_meta( $logo_image, '_wp_attachment_image_alt', true ) ?: '';
endif;

?>



	<footer class="site-footer">
		<div class="container">
			<div class="footer-content">

				<div class="footer-top-area row g-4 g-lg-5">
					
					<div class="col-6 col-sm-4 col-lg-3">
						<h6 class="text-uppercase fw-normal">Title h6</h6>
						<nav>
							<ul class="mb-0 list-unstyled d-flex flex-column">
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
							</ul>
						</nav>
					</div>

					<div class="col-6 col-sm-4 col-lg-3">
						<h6 class="text-uppercase fw-normal">Title h6</h6>
						<nav>
							<ul class="mb-0 list-unstyled d-flex flex-column">
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
							</ul>
						</nav>
					</div>

					<div class="col-6 col-sm-4 col-lg-3">
						<h6 class="text-uppercase fw-normal">Title h6</h6>
						<nav>
							<ul class="mb-0 list-unstyled d-flex flex-column">
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
							</ul>
						</nav>
					</div>

					<div class="col-6 col-sm-4 col-lg-3">
						<h6 class="text-uppercase fw-normal">Title h6</h6>
						<nav>
							<ul class="mb-0 list-unstyled d-flex flex-column">
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
								<li>
									<a href="">Puslapis</a>
								</li>
							</ul>
						</nav>
					</div>

				</div>

				<div class="footer-bottom-area d-flex justify-content-between align-items-end">
					<div class="">

						<a href="<?php echo home_url(); ?>" title="<?php _e('Į pagrindinį', 'onest-home'); ?>">
							<div class="img-wrapper">
								<?php if ( $logo_image ) : ?>
									<img class="img-fluid" 
										src="<?php echo esc_url( $logo_image_url ); ?>" 
										alt="<?php echo esc_attr( $logo_image_alt ); ?>" 
										decoding="async" 
										loading="lazy">
								<?php endif; ?>
							</div>
						</a>
						
					</div>
					<div class="">
						<p class="mb-0 date">
							<?php echo date( 'Y' ); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</footer>

</div><!-- .site -->



<?php wp_footer(); ?>

</body>
</html>
