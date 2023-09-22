<?php

// ADD custom box to Wordpress Dashboard

/* 

Inspired by: https://www.youtube.com/watch?v=v7AfEVnoaho
Author: Eric Hepperle
Date Created: 2023-07-10

Code Snippets Plugin Settings:
- Only run in admin area

*/

function custom_dashboard_help(){

  echo "Your text goes here.";
  
}

function my_custom_dashboard_widgets() {

  global $wp_meta_boxes;

  wp_add_dashboard_widget('custom_help_widget', 'Website Tutorials and Add-ons', 'custom_dashboard_help');
}
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');