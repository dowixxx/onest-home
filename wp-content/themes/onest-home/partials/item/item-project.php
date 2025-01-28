<div class="project-item">
    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="project-image img-wrapper">
                <?php the_post_thumbnail( 'full-size', array( 'class' => 'img-fluid' ) ); ?>
            </div>
        <?php endif; ?>

        <!-- <div class="project-categories text-uppercase">
            Kategorija, Kategorija#2
        </div> -->

        <h5 class="project-title fw-normal"><?php the_title() ?></h5>

        <p class="project-content mb-0"><?php the_excerpt() ?></p>

    </a>
</div>