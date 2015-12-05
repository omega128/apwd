<?php
  $args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
  );

  add_theme_support( 'html5', $args );

  //Register our custom menu
  if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      )
    );
  }

  //Register widget areas
  add_action( 'widgets_init', 'my_register_widgets' );

  function my_register_widgets() {
    register_sidebar(
      array(
        'id' => 'header',
	'name' => __( 'Header Widget Area' ),
      )
    );
    register_sidebar(
      array(
        'id' => 'footer1',
	'name' => __( 'Footer-1' ),
      )
    );
    register_sidebar(
      array(
        'id' => 'footer2',
        'name' => __( 'Footer-2' ),
      )
    );
    register_sidebar(
      array(
        'id' => 'footer3',
        'name' => __( 'Footer-3' ),
      )
    );
  }
?>
