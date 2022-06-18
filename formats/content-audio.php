<section class="fruit_section">
    <div class="container">
        <div class="row layout_padding2">
            <div class="col-md-8">
                <div class="fruit_detail-box">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <p class="mt-4 mb-5">
                        <?php the_content(); ?>
                    </p>
                    <div>
                        <a href="<?php the_permalink() ?>" class="custom_dark-btn">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div class="fruit_img-box d-flex justify-content-center align-items-center">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            </div>
        </div>
    </div>
</section>