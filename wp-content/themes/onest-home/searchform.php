<?php
/**
* The template for displaying search form.
*/
?>



<form class="search-form d-flex mb-0 position-relative" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">

	<input class="border border-1 border-gray-bright rounded-1 w-100 form-control form-control-sm" type="search" placeholder="Ieškoti" name="s" value="<?php echo get_search_query(); ?>" aria-label="Ieškoti" title="Paieška">

	<button class="border-0 bg-transparent position-absolute top-0 bottom-0 my-auto" type="submit" aria-label="Ieškoti">

		<div class="img-wrapper d-flex align-items-center">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.6953 11.78L14.3002 14.3M13.4602 7.58001C13.4602 10.8274 10.8276 13.46 7.5802 13.46C4.33276 13.46 1.7002 10.8274 1.7002 7.58001C1.7002 4.33258 4.33276 1.70001 7.5802 1.70001C10.8276 1.70001 13.4602 4.33258 13.4602 7.58001Z" stroke="" stroke-width="1.5" stroke-linecap="round"/>
			</svg>
		</div>

	</button>

</form>



<!-- <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'jointswp' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
	</label>
	<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'jointswp' ) ?>" />
</form> -->