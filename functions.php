<!-- file to add hooks into, configure theme, enque imports(?). -->


<?php

function load_stylesheets() {
  //My own style
  // wp_register_style(
  //   'stylesheet', 
  //   get_template_directory_uri() . '/bootstrapcss/bootstrap.min.css',
  //   array(),
  //   false, //version
  //   'all');
  // wp_enqueue_style('stylesheet');

  //Bootstrap
  wp_register_style(
    'stylesheet', 
    get_template_directory_uri() . '/bootstrapcss/bootstrap.min.css',
    array(),
    false, //version
    'all');
  wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

