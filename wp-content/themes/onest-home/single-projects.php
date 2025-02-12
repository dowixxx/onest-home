<?php
/*
Template Name: Projects
Template Post Type: project
*/


$project_date = carbon_get_the_post_meta('project_date');
$project_location = carbon_get_the_post_meta('project_location');
$project_building_type = carbon_get_the_post_meta('project_building_type');
$project_standart_solutions = carbon_get_the_post_meta('project_standart_solutions');
$project_non_standart_solutions = carbon_get_the_post_meta('project_non_standart_solutions');


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
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('Data:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_date ) ?></p>
						</div>
						<div class="project-info-item">
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('Vieta:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_location ) ?></p>
						</div>
						<div class="project-info-item">
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('Pastato/buto tipas:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_building_type ) ?></p>
						</div>
						<div class="project-info-item">
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('Pritaikyti standartiniai sprendimai:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_standart_solutions ) ?></p>
						</div>
						<div class="project-info-item">
							<h5 class="fw-normal mb-0 d-inline-block"><?php _e('pritaikyti nestandartiniai sprendimai:', 'onest-home'); ?></h5>
							<p class="mb-0 d-inline-block"><?php echo esc_html( $project_non_standart_solutions ) ?></p>
						</div>
					</div>

					<?php the_content() ?>

				</div>
			</div>
		</article>

	</main>

<?php
get_footer();
