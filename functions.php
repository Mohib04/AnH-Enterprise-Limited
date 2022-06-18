<?php

add_action('after_setup_theme', 'anh_setup');
function anh_setup(){
    load_theme_textdomain('anh', get_template_directory(). '/languages');
    add_theme_support( 'title-tag' );
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote,', 'status', 'video', 'audio', 'chat' ));
    register_nav_menu( 'main-menu', __('Main Menu', 'anh') );
}

//Register style and javascript files
add_action('wp_enqueue_scripts', 'anh_theme_style');
if ( ! function_exists('anh_theme_style')):
    function anh_theme_style(){
        //Theme Version
        $theme_version = wp_get_theme()->get( 'version' );
        $version_string = is_string( $theme_version) ? $theme_version : false;

        //css
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',array(),$version_string);
        wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css',array(),$version_string);
        wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css',array(),$version_string);
        wp_register_style('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css',array(),$version_string);
        
        //JS
        wp_register_script('script', get_template_directory_uri() . '/assets/js/myscript.js',array(),$version_string);
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js',array(),$version_string);

		// Enqueue theme stylesheet
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'style' );
		wp_enqueue_style( 'responsive' );
		wp_enqueue_style( 'owl' );
        
        // Enqueue theme scripts.
		wp_enqueue_script('script' );
		wp_enqueue_script('bootstrap' );
    }
endif;

//Add menu li class added
add_filter ( 'nav_menu_css_class', 'add_li_class', 10, 4 );

function add_li_class ( $classes, $item, $args, $depth ){
  $classes[] = 'menu-li';
  return $classes;
}
//Add menu link class
function add_menu_link_class($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', 'add_menu_link_class');