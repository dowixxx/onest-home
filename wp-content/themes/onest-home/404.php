<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package onest-home
 */



get_header();
?>



	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="container text-center">

				<br>
				<br>
				<br>
				<br>

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Ups! Puslapis nerastas.', 'onest-home' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<p><?php esc_html_e( 'Atrodo, kad šiame adrese nieko nerasta.', 'onest-home' ); ?></p>

				</div><!-- .page-content -->

				<br>
				<br>
				<br>
				<br>

			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->



<?php
get_footer();