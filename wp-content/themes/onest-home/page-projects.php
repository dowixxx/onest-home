<?php
/*
Template Name: Projects
Template Post Type: page
*/



get_header();
?>


	<main class="site-main">

		<section class="portfolio">
			<div class="container">
				<div class="portfolio-content">

					<h1 class="title fw-normal text-uppercase text-center text-lg-start">
						<?php the_title() ?>
					</h1>

					<div class="portfolio-collection row g-4">

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
								include locate_template('partials/item/item-portfolio.php');

							endwhile; 
						endif; 
						wp_reset_postdata(); 
						?>

					</div>

				</div>
			</div>
		</section>

	</main>
	

<?php
get_footer();
