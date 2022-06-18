<section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider_item-box">
                    <div class="slider_item-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slider_item-detail">
                                        <div>
                                            <h1>
                                                <?php the_title(); ?>
                                            </h1>
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                            <div class="d-flex">
                                                <a href="" class="text-uppercase custom_orange-btn mr-3">
                                                    Shop Now
                                                </a>
                                                <a href="" class="text-uppercase custom_dark-btn">
                                                    Contact Us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider_img-box">
                                        <div>
                                            <?php echo get_the_post_thumbnail('medium'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>