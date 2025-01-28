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

$instagram_profile_url = carbon_get_theme_option( 'crb_instagram_url' );
$facebook_profile_url = carbon_get_theme_option( 'crb_facebook_url' );

$menu_locations = get_nav_menu_locations();


?>



	<footer class="site-footer <?php echo is_page_template('page-contacts.php') ? 'mt-0' : ''; ?>">
		<div class="container">
			<div class="footer-content">

				<div class="footer-top-area row g-4 g-lg-5">

					<!-- footer_menu_1 -->
					<?php if ( isset( $menu_locations[ 'footer_menu_1' ] ) ) : 

						$menu_name = wp_get_nav_menu_object( $menu_locations[ 'footer_menu_1' ] )->name;
					?>
					
						<div class="col-6 col-sm-4 col-lg-3">
							<h6 class="text-uppercase fw-normal"><?php echo $menu_name ?></h6>
							<nav>
								<?php
								wp_nav_menu([
									'theme_location' => 'footer_menu_1',
									'menu_class' => 'mb-0 list-unstyled d-flex flex-column',
									'container' => false,
								]);
								?>
							</nav>
						</div>
					<?php endif; ?>

					<!-- footer_menu_2 -->
					<?php if ( isset( $menu_locations[ 'footer_menu_2' ] ) ) : 

						$menu_name = wp_get_nav_menu_object( $menu_locations[ 'footer_menu_2' ] )->name;
					?>
						<div class="col-6 col-sm-4 col-lg-3">
							<h6 class="text-uppercase fw-normal"><?php echo $menu_name ?></h6>
							<nav>
								<?php
								wp_nav_menu([
									'theme_location' => 'footer_menu_2',
									'menu_class' => 'mb-0 list-unstyled d-flex flex-column',
									'container' => false,
								]);
								?>
							</nav>
						</div>
					<?php endif; ?>	

					<!-- footer_menu_3 -->
					<?php if ( isset( $menu_locations[ 'footer_menu_3' ] ) ) : 

						$menu_name = wp_get_nav_menu_object( $menu_locations[ 'footer_menu_3' ] )->name;
					?>
						<div class="col-6 col-sm-4 col-lg-3">
							<h6 class="text-uppercase fw-normal"><?php echo $menu_name ?></h6>
							<nav>
								<?php
								wp_nav_menu([
									'theme_location' => 'footer_menu_3',
									'menu_class' => 'mb-0 list-unstyled d-flex flex-column',
									'container' => false,
								]);
								?>
							</nav>
						</div>
					<?php endif; ?>	

					<!-- footer_menu_4 -->
					<?php if ( isset( $menu_locations[ 'footer_menu_4' ] ) ) : 

						$menu_name = wp_get_nav_menu_object( $menu_locations[ 'footer_menu_4' ] )->name;
					?>
						<div class="col-6 col-sm-4 col-lg-3">
							<h6 class="text-uppercase fw-normal"><?php echo $menu_name ?></h6>
							<nav>
								<?php
								wp_nav_menu([
									'theme_location' => 'footer_menu_4',
									'menu_class' => 'mb-0 list-unstyled d-flex flex-column',
									'container' => false,
								]);
								?>
							</nav>
						</div>
					<?php endif; ?>

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
