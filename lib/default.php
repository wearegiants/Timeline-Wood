<?php

  add_image_size( 'gallery-xs', 85  , 35,  true );
  add_image_size( 'gallery-sm', 320 , 320, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'gallery-xl', 1400, 900, true );
  add_image_size( 'gallery-sq', 1000, 1000, true );
  add_image_size( 'gallery-photo', 1280, 1024, true );
  add_image_size( 'commercial', 683, 1024, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-left',__( 'Footer Left' ));
    register_nav_menu('footer-right',__( 'Footer Right' ));
  }
  add_action( 'init', 'register_my_menu' );
  
  add_theme_support( 'post-thumbnails' );

  // Adding Widgets

  register_sidebar( array(
    'id'            => 'primary-widget-area',
    'name'          => 'Primary Widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  // Add custom class to menu links

  function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="btn btn--nav"', $ulclass);
  }

  //add_filter('wp_nav_menu','add_menuclass');