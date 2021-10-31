<!-- file to add hooks into, configure theme, enque imports(?). -->


<?php

function load_stylesheets() {
  //Bootstrap
  wp_register_style(
    'bootstrap', 
    get_template_directory_uri() . '/bootstrapcss/bootstrap.min.css',
    array(),
    false, //version
    'all');
  wp_enqueue_style('bootstrap');

  //My own style
  wp_register_style(
    'style', 
    get_template_directory_uri() . '/style.css',
    array(),
    false, //version
    'all');
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js() {
  wp_register_script(
    'customjs', 
    get_template_directory_uri() . '/scripts.js',
    '',
    1, //version
    true, //script placed/run in footer
    );
  wp_enqueue_script('customjs');
}

add_action( 'wp_enqueue_scripts', 'load_js');