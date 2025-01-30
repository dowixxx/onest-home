<article class="portfolio-item col-12 col-lg-6">
    
    <a href="<?php the_permalink() ?>" class="portfolio-link" title="<?php the_title() ?>">
    
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="img-wrapper overflow-hidden h-100">
                <?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid' ) ); ?>
            </div>
        <?php endif; ?>
        
    </a>

    <div class="entry-content"> 
        <h2 class="entry-title">
            <?php the_title() ?>
        </h2>
        <p class="entry-excerpt"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="btn btn-sm btn-secondary btn-icon text-uppercase" title="<?php _e('Daugiau', 'onest-home'); ?>">
            <span><?php _e('Daugiau', 'onest-home'); ?></span>
            <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.354 0.707L6 0.353L6.354 0L6.708 0.353L6.354 0.707ZM6.854 15.707C6.854 15.8396 6.80132 15.9668 6.70755 16.0606C6.61379 16.1543 6.48661 16.207 6.354 16.207C6.22139 16.207 6.09421 16.1543 6.00045 16.0606C5.90668 15.9668 5.854 15.8396 5.854 15.707H6.854ZM0 6.353L6 0.353L6.708 1.061L0.708 7.061L0 6.353ZM6.708 0.353L12.708 6.353L12 7.061L6 1.061L6.708 0.353ZM6.854 0.707V15.707H5.854V0.707H6.854Z" fill="black"/>
            </svg>
        </a>    
    </div>

    <h2 class="entry-title -mobile d-lg-none">
        <?php the_title() ?>
    </h2>

</article>