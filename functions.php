<!-- file to add hooks into, configure theme, enque imports(?). -->


<?php

function load_stylesheets() {
  //Bootstrap
  wp_register_style(
    'bootstrap', 
    get_template_directory_uri() . '/bootstrapcss/bootstrap.min.css',
    array(),
    false,
    'all');
  wp_enqueue_style('bootstrap');

  //My own style
  wp_register_style(
    'style', 
    get_template_directory_uri() . '/style.css',
    array(),
    false, 
    'all');
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');





function load_js() {
  wp_register_script(
    'customjs', 
    get_template_directory_uri() . '/scripts/scripts.js',
    '',
    1, //version
    true, //script placed/run in footer
    );
  wp_enqueue_script('customjs');

  //Just it is loaded somewhere behind the scenes.
  wp_deregister_script( 'jquery' ); 

  wp_register_script(
    'jquery', 
    get_template_directory_uri() . '/scripts/jquery.js',
    '',
    1, //version
    true, //script placed/run in footer
    );
  wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'load_js');