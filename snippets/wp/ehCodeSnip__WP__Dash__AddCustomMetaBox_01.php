<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Add Custom Box (Widget)
Author: Code Snippets plugin
Date Created: 2023-07-10

DESCRIPTION:

- Adds custom metabox titled "Website Tutorials and Add-ons" to the admin dashboard.
- Inspired by: https://www.youtube.com/watch?v=v7AfEVnoaho (Marty Englander)

Code Snippets Plugin Settings:
- Only run in administration area


TAGS:

*/

function custom_dashboard_help(){

  echo "Your text goes here.";
  
}

function my_custom_dashboard_widgets() {

  global $wp_meta_boxes;

  wp_add_dashboard_widget('custom_help_widget', 'Website Tutorials and Add-ons', 'custom_dashboard_help');
}
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');