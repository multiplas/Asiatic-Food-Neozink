<?php
function divi_child_enqueue_styles() {
    wp_enqueue_style( 'divi-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'divi-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'divi-style' ), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'divi_child_enqueue_styles' );

function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/css/admin-css.css');
  }
add_action('admin_enqueue_scripts', 'admin_style');
