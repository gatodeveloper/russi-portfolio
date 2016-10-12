<?php
  add_action( 'init', 'register_my_menus' );

  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => 'Header menu',
        'optional-menu' => 'Optional Menu'
      )
    );
  }

  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 );
  }