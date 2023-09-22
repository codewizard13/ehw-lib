<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Custom Admin Dashboard Widget
Author: Code Snippets plugin
Date Created: 2023-07-10

DESCRIPTION:

- Adds custom metabox titled "Website Tutorials and Add-ons" to the admin dashboard.
- Inspired by: https://www.youtube.com/watch?v=3IyfVqhnD4g (Joshua Herbison)

Code Snippets Plugin Settings:
- Only run in administration area


TAGS:

*/

function admin_dashboard_widget() {

  wp_add_dashboard_widget(
    'admin_dashboard_widget',
    'Hello World Widget',
    'admin_dashboard_widget_callback'
  );

}
add_action('wp_dashboard_setup', 'admin_dashboard_widget');

function admin_dashboard_widget_callback() {
  echo "Hello Dashboard!!";
}