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