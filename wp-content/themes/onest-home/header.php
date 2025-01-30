<?php

$instagram_profile_url = carbon_get_theme_option( 'crb_instagram_url' );
$facebook_profile_url = carbon_get_theme_option( 'crb_facebook_url' );

$notice_lt = carbon_get_theme_option( 'crb_notice_lt' );
$notice_en = carbon_get_theme_option( 'crb_notice_en' );

$logo_image = carbon_get_theme_option('crb_logo');
if ( $logo_image ) :
	$logo_image_url = wp_get_attachment_image_url( $logo_image, 'full' );
	$logo_image_alt = get_post_meta( $logo_image, '_wp_attachment_image_alt', true ) ?: '';
endif;


?>



<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta class="foundation-mq">

	<meta name="description" content="">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="apple-touch-icon" />	
	<?php } ?>

	<title>
        <?php wp_title(); ?>
    </title>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-id="<?= get_the_ID() ?>">
<?php wp_body_open(); ?>


<div class="site">

	<header class="site-header">
		<!-- <div class="container"> -->
			<div class="site-header-content">

				<div class="header-top-area">
					<div class="container-full">
						<div class="header-top-area-content d-flex justify-content-between align-items-center">

							<?php if ( get_locale() == 'en_GB' && ! empty( $notice_en ) ) : ?>
								<div class="notice d-flex align-items-center">
									<div class="svg-wrapper me-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="22.741" height="25.407" viewBox="0 0 22.741 25.407">
											<path id="Path_273" data-name="Path 273" d="M1501.221,1035.407v-8.44a3.834,3.834,0,0,0-3.59-4.038H1490v-.337h7.63a3.834,3.834,0,0,0,3.59-4.038V1010h.3v8.554a3.834,3.834,0,0,0,3.591,4.038h7.63v.337h-7.63a3.834,3.834,0,0,0-3.591,4.038v8.44Z" transform="translate(-1490 -1010)"></path>
										</svg>
									</div>
									<p class="mb-0">
										<?php echo esc_html( $notice_en ) ?>
									</p>
								</div>
							<?php endif; ?>

							<?php if ( get_locale() == 'lt_LT' && ! empty( $notice_lt ) ) : ?>
								<div class="notice d-flex align-items-center">
									<div class="svg-wrapper me-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="22.741" height="25.407" viewBox="0 0 22.741 25.407">
											<path id="Path_273" data-name="Path 273" d="M1501.221,1035.407v-8.44a3.834,3.834,0,0,0-3.59-4.038H1490v-.337h7.63a3.834,3.834,0,0,0,3.59-4.038V1010h.3v8.554a3.834,3.834,0,0,0,3.591,4.038h7.63v.337h-7.63a3.834,3.834,0,0,0-3.591,4.038v8.44Z" transform="translate(-1490 -1010)"></path>
										</svg>
									</div>
									<p class="mb-0">
										<?php echo esc_html( $notice_lt ) ?>
									</p>
								</div>
							<?php endif; ?>

							<div class="header-top-area-menu ms-auto">
								<li>
									<a href="<?php echo esc_url($instagram_profile_url) ?>" title="Instagram profile">IG</a>
								</li>
								<li>
									<a href="<?php echo esc_url($facebook_profile_url) ?>" title="Facebook profile">FB</a>
								</li>
								<?php
								$languages = pll_the_languages(array('raw' => 1));
								if (!empty($languages)) :
									foreach ($languages as $lang) :
										if (!$lang['current_lang']) : // Only display non-current language ?>

											<li>
												<a href="<?php echo esc_url( $lang[ 'url' ] ) ?>"
													id="pll-switcher"
													title="<?php echo esc_attr( $lang[ 'name' ] ) ?>">
													<?php echo esc_html( $lang[ 'name' ] ) ?>
												</a>
											</li>

										<?php endif; ?>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>

						</div>
					</div>
				</div>

				<div class="header-main-area border-top border-bottom">
					<div class="container-full">
						<div class="header-main-area-content d-flex align-items-center">

							<a href="<?php echo home_url(); ?>" 
								class="site-branding d-inline-block" 
								title="<?php _e('Į pagrindinį', 'onest-home'); ?>">

								<div class="img-wrapper">
									<?php if ( $logo_image ) : ?>
										<img class="img-fluid" 
											src="<?php echo esc_url( $logo_image_url ); ?>" 
											alt="<?php echo esc_attr( $logo_image_alt ); ?>" 
											fetchpriority="high">
									<?php endif; ?>
								</div>
							</a>

							<nav class="navbar navbar-expand-lg p-0 w-100 position-static" role="navigation">

								<button class="navbar-toggler border-0" 
									type="button" 
									data-bs-toggle="offcanvas"
									data-bs-target="#primary-menu-offcanvas" 
									aria-controls="primary-menu-offcanvas" 
									aria-expanded="false" 
									aria-label="Toggle navigation">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45px" height="15px" viewBox="0 0 45 15" xml:space="preserve">
										<line x1="0" y1="0.5" x2="45" y2="0.5"></line>
										<line x1="0" y1="7.5" x2="45" y2="7.5"></line>
										<line x1="0" y1="14.5" x2="45" y2="14.5"></line>
									</svg>
								</button>

								<?php
								wp_nav_menu(array(
									'theme_location' 	=> 'header-primary-menu',
									'container' 		=> 'div',
									'container_class'   => 'w-100',
									'fallback_cb' 		=> '__return_false',
									'items_wrap' 		=> '

									<div id="primary-menu-offcanvas" class="offcanvas offcanvas-end d-lg-none">
										<div class="offcanvas-header p-0">
											<button type="button" class="btn p-0 ms-auto border-0" data-bs-dismiss="offcanvas" aria-label="Close">
												<svg class="qodef-svg--close-menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16" height="16" viewBox="0 0 16 16" xml:space="preserve">
													<line x1="0.5" y1="0.5" x2="15.5" y2="15.5"></line>
													<line x1="15.5" y1="0.5" x2="0.5" y2="15.5"></line>
												</svg>
											</button>
										</div>
										<ul class="navbar-nav me-auto mb-2 mb-md-0 w-100 h-100 %2$s">%3$s</ul>
									</div>
									
									<ul class="navbar-nav me-auto mb-2 mb-md-0 w-100 d-none d-lg-flex %2$s">%3$s</ul>
									',
									'depth' 			=> 3,
									'walker' 			=> new bs5_Walker()
								));
								?>
							</nav>

						</div>
					</div>
				</div>

			</div>
		<!-- </div> -->
	</header>
