<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package onest-home
 */

get_header();

?>



	<div id="main-content" class="container px-3 px-sm-0">

		<?php 
		get_search_form(); 
		?>

		<?php if ( have_posts() ) : ?>
		
			<?php get_template_part( 'archive', 'loop' ); ?>
				
		<?php else : ?>
				
			<article id="post-0" class="post no-results not-found mb-5 mt-5 text-center">

				<header class="entry-header">
					<h1 class="entry-title">Nieko nerasta</h1>
				</header>
				<p>Atsiprašome, bet niekas neatitiko jūsų paieškos kriterijų. Bandykite dar kartą naudodami kitus raktinius žodžius.</p>

			</article>

		<?php endif; wp_reset_postdata(); ?>

	</div>

<?php get_footer(); ?>
