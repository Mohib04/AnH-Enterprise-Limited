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
        wp_register_style('style', get_stylesheet_uri());
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',array(),$version_string);
        wp_register_style('themestyle', get_template_directory_uri() . '/assets/css/themestyle.css',array(),$version_string);
        wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css',array(),$version_string);
        wp_register_style('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css',array(),$version_string);
        
        //JS
        wp_register_script('script', get_template_directory_uri() . '/assets/js/myscript.js',array(),$version_string);
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js',array(),$version_string);

		// Enqueue theme stylesheet
		wp_enqueue_style( 'style' );
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'themestyle' );
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

//Custom Post type for ANH Projects
function anh_project(){
    register_post_type( 'anh-project', array(
        'labels'        => array(
            'name'          => __('ANH Projects', 'anh'),
            'singular_name' => __('ANH Project', 'anh'),
            'add_new_item'  => __('Add New Project'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array('thumbnail'),
        'menu_icon'     => 'dashicons-admin-customizer',
        'menu_position' => 20,
    ) );

    register_taxonomy('anh-project-taxonomy', 'anh-project', array(
        'labels'        => array(
            'name'          => __('Status', 'anh'),
            'add_new_item'  => __('Add New Status', 'anh')
    ),
    'public'            => true,
    'hierarchical'      => true
));
}
add_action('init', 'anh_project'); 

//Custom Post Type for SRD Limited
function srd_project(){
    register_post_type('srd-project', array(
        'labels'        => array(
            'name'          => __('SRD Projects', 'anh'),
            'singular_name' => __('SRD Project', 'anh'),
            'add_new_item'  => __('Add New Project', 'anh')
        ),
        'public'        => true,
        'has_archived'  => true,
        'supports'      => array('title','editor','thumbnail'),
        'menu_icon'     => 'dashicons-admin-customizer',
        'menu_position' => 21
    ));
    
    register_taxonomy('srd-project-taxonomy', 'srd-project', array(
        'labels'        => array(
            'name'          => __('Project Status', 'anh'),
            'add_new_item'  =>__('Add New Status', 'anh'),
        ),
        'public'        => true,
        'hierarchical'  => true
    ));
}
add_action('init', 'srd_project');

//CMB2
if(file_exists(dirname(__FILE__).'/metabox/init.php')){
    require_once(dirname(__FILE__).'/metabox/init.php');
}
if(file_exists(dirname(__FILE__).'/metabox/custom.php')){
    require_once(dirname(__FILE__).'/metabox/custom.php');
}

//Sidebar Registration
add_action('widgets_init', 'anh_sidebars');
function anh_sidebars(){
    register_sidebar(array(
        'id'            => 'right-sidebar',
        'name'          => __('Right Side', 'anh'),
        'description'   => __('Add widgets here', 'anh'),
    ));
    register_sidebar(array( 
        'id'            => 'left-sidebar',
        'name'          => __('Left Side', 'anh'),
        'description'   => __('Add widgets here', 'anh'),
    ));
}

//ShortCode Registration
add_shortcode( 'anh', 'anh_sort_code' );
function anh_sort_code($atts, $content){

   $var = shortcode_atts( array(
        'position'             => 'left',
        'colur'                => 'red'
    ),$atts);
    
    return "<h2 style='text-align:$var[position]; color: $var[colur]; '>".do_shortcode($content)."</h2>";
}

add_shortcode('vitore', 'vitore');
function vitore($atts, $content){
    return "ami vitrere ta";
}

//Redux Framework
if(file_exists(dirname(__FILE__).'/redux/redux-framework.php')){
    require_once(dirname(__FILE__).'/redux/redux-framework.php');
}
if(file_exists(dirname(__FILE__).'/redux/sample/anh-config.php')){
    require_once(dirname(__FILE__).'/redux/sample/anh-config.php');
}