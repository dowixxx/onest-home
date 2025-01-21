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
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
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
		<div class="container">
			<div class="site-header-content">

				<div class="header-top-area d-flex justify-content-between align-items-center">

					<p class="notice mb-0">10% discount for registered users</p>

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header-top-area', 
								'menu_id'        => 'header-top-area-menu',
								'menu_class'     => '', 
							)
						);
					?>	

				</div>

				<div class="header-main-area d-flex align-items-center border-top border-bottom">

					<a href="<?php echo home_url(); ?>" 
						class="site-branding d-inline-block" 
						title="<?php _e('Į pagrindinį', 'onest-home'); ?>">

						<div class="img-wrapper">
							<img class="img-fluid" 
								src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
								alt="<?php _e('Į pagrindinį', 'onest-home'); ?>"
								fetchpriority="high">
						</div>
						
					</a>

					<nav class="navbar navbar-expand-lg p-0 w-100" role="navigation">

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
	</header>
