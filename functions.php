<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_link_atts($atts) {
  $atts['class'] = "nav-link js-scroll-trigger";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function themename_post_formats_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}

add_action( 'after_setup_theme', 'themename_post_formats_setup' );
add_theme_support( 'post-thumbnails' ); 

// require_once('portfolio-type.php');