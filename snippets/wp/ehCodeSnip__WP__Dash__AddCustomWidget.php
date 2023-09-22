<?php

// ADD custom Dashboard Widget to Wordpress Dashboard

/* 

Inspired by: https://www.youtube.com/watch?v=3IyfVqhnD4g (Joshua Herbison)
Author: Eric Hepperle
Date Created: 2023-07-10

Code Snippets Plugin Settings:
- Only run in admin area

*/

function admin_dashboard_widget() {

  wp_add_dashboard_widget(
    'admin_dashboard_widget',
    'Admin Dashboard Widget Title',
    'admin_dashboard_widget_callback'
  );

}
add_action('wp_dashboard_setup', 'admin_dashboard_widget');

function admin_dashboard_widget_callback() {
  echo "Hello Dashboard!!";
}