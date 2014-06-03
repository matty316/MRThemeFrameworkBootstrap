<?php

function theme_styles()
{
  wp_enqueue_style('lato', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' );
  wp_enqueue_style('noto', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic' );
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js()
{

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(jquery), '', true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/js/main.min.js', array(jquery), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

// Add dynamic navbar
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

$args = array(
	'default-image' => get_template_directory_uri() . '/img/logo5.png',
);

add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );

$args = array(
  'default-color' => 'f1f4f9'

);
add_theme_support( 'custom-background', $args );

function create_widget($name, $id, $description)
{
  register_sidebar(array(
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

create_widget( 'Sidebar', 'sidebar', 'Side bar widget' );
