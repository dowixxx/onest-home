<div class="page-content col-12 col-lg-6">

    <!-- <h1 class="fw-normal text-uppercase">
        <?php the_title(); ?>
    </h1> -->

    <?php the_content(); ?>

    <?php if ( 
        !is_page_template( 'page-custom-furniture.php' ) && 
        !is_page_template( 'page-interior.php' ) && 
        !is_page_template( 'page-construction.php' ) 
        ) : ?>
        <a href="#form-lead" class="btn btn-primary mt-2 text-uppercase">
            <?php _e('Susisiekite', 'onest-home'); ?>
        </a>
    <?php endif; ?>

    <!-- <br>
    <button class="btn btn-secondary mt-2 text-uppercase">secondary</button>
    <br>
    <button class="btn btn-sm btn-primary mt-2 text-uppercase">small primary</button>
    <br>
    <button class="btn btn-sm btn-secondary mt-2 text-uppercase">small secondary</button>
   -->

</div>