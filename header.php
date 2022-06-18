<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Basic -->
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class=" hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="images/logo.png" alt="" /><span>
                            <?php bloginfo('title'); ?>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <?php 
                            wp_nav_menu( array(
                                'theme_location'    => 'main-menu',
                                'container'         => false,
                                'menu_class'        => 'navbar-nav',
                            ) );
                            
                            ?>
                        </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->