<?php 

function enqueue_theme_styles() {  
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles');

// Add Thumbnails
add_theme_support('post-thumbnails');