<?php get_header(); ?>

<section class="service_section layout_padding ">
    <div class="container">
        <div class=" layout_padding2">
            <div class="card-deck">
                <div class="card">
                    <?php the_post_thumbnail('medium'); ?>
                    <div class="card-body">
                        <h5 class="card-title"> <?php the_title(); ?></h5>
                        <p class="card-text">
                            <?php the_content() ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>