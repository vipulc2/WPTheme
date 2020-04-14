<?php 

function myfun(){

  wp_enqueue_script('JS script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

  wp_enqueue_style('loading_fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_enqueue_style('loading fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

  wp_enqueue_style('function to load css', get_stylesheet_uri());
}

function uniFeatures(){
  add_theme_support('title-tag');
}


add_action('wp_enqueue_scripts','myfun');

add_action('after_setup_theme', 'uniFeatures');








?>