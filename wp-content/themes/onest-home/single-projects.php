<?php
/*
Template Name: Projects
Template Post Type: project
*/



$project_client = carbon_get_the_post_meta('project_client');
$project_location = carbon_get_the_post_meta('project_location');



get_header();
?>

	<main class="site-main">

		<article class="article-project">
			<div class="container">
				<div class="article-project-content">

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="img-wrapper img-featured">
							<?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid w-100' ) ); ?>
						</div>
					<?php endif; ?>

					<h1 class="title text-uppercase fw-normal"><?php the_title() ?></h1>

					<div class="project-info mb-5">
						<div class="project-info-item">
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('Klientas:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_client ) ?></p>
						</div>
						<div class="project-info-item">
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('Vieta:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_location ) ?></p>
						</div>
					</div>

					<?php the_content() ?>

				</div>
			</div>
		</article>

	</main>

<?php
get_footer();
