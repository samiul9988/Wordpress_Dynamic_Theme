<?php
/*
theme function
*/ 
function deelko_jubayer_theme_setup(){
    add_theme_support( 'custom-logo' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'home-featured', 680, 400, array('center', 'center') );

    add_image_size( 'sigle-post', 580, 272, array('center', 'center') );

    add_theme_support( 'automatic-feed-links' );

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'deelko_jubayer')
    ) );

}

add_action( 'after_setup_theme', 'deelko_jubayer_theme_setup' );
function deelko_jubayer_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'deelko_jubayer-browser', get_template_directory_uri(  ). '/assets/js/browser.min.js' );
    wp_enqueue_script( 'deelko_jubayer-breakpoints', get_template_directory_uri(  ). 'assets/js/breakpoints.min.js' );
    wp_enqueue_script( 'deelko_jubayer-util', get_template_directory_uri(  ). '/assets/js/util.js' );
    wp_enqueue_script( 'deelko_jubayer-browser', get_template_directory_uri(  ). '/assets/js/main.js' );
}
add_action('wp_enqueue_scripts', 'deelko_jubayer_scripts');

function deelko_jubayer_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'deelko_jubayer' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widgettitle">',
        'after_title'   => '</h2></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'deelko_jubayer' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widgettitle">',
        'after_title'   => '</h2></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'deelko_jubayer' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widgettitle">',
        'after_title'   => '</h2></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'deelko_jubayer' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widgettitle">',
        'after_title'   => '</h2></header>',
    ) );
}

add_action( 'widgets_init','deelko_jubayer_widgets_init' );

//Portfolio post

require(get_template_directory(). '/inc/portfolio.php');

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'current';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);