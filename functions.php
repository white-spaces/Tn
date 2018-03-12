<?php

  //register nav walker

//theme support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    //nav menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    //post format
    add_theme_support('post-formats', array('aside','gallery'));
  }

  add_action('after_setup_theme', 'wpb_theme_setup');

//exceprt length control
function set_excerpt_length(){
  return 50;
}

add_filter('excerpt_length', 'set_excerpt_length');

// widget locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name' => 'Archives',
    'id'   => 'archives',
    'before_widget' => '<div class="li-container-2">',
    'after_widget'  => '</div>',
  ));
}

  add_action('widgets_init', 'wpb_init_widgets');

  function init_widgets($id){
    register_sidebar(array(
      'name' => 'Categories',
      'id'   => 'categories',
      'before_widget' => '<div class="li-container">',
      'after_widget'  => '</div>',
    ));
  }

add_action('widgets_init', 'init_widgets');
//register nav menyu
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
    'second' => __( 'Second Footer Menu'),
));

// customizer
require get_template_directory(). '/inc/customizer.php';

function register_my_menu() {
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Mobile Menu')
  ));
}
add_action('init', 'register_my_menu');