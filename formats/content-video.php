<section class="service_section layout_padding ">
    <div class="container">
        <div class=" layout_padding2">
            <div class="card-deck">
                <div class="card">
                    <?php echo get_the_post_thumbnail('medium'); ?>
                    <div class="card-body">
                        <h5 class="card-title"> <?php the_title(); ?></h5>
                        <p class="card-text">
                            <?php the_content() ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?php the_permalink(); ?>" class="custom_dark-btn">
                Read More
            </a>
        </div>
    </div>
</section>