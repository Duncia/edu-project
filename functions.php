<?php
//Theme setup
function educrat_setup(){
  //Title in the tab of every page
  add_theme_support('title-tag');
  //Enabling thumbnails
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'educrat_setup');

//Add JS/CSS files
function educrat_js_css_files() {
    wp_enqueue_style('educrat_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_script('index', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0.0', true);
  }
add_action('wp_enqueue_scripts', 'educrat_js_css_files');