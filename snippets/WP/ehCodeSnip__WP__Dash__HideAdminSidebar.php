<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Hide Admin Sidebar
Author: Code Snippets plugin
Date Created: 2023-08-10

DESCRIPTION:

- Hides the admin sidebar

SAMPLE RESULTS:

N/A


SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, Sidebar
*/

function ehw_hide_sidebar_menu() {

// Hide sidebar menu when displaying debug variables	
$style =<<<STYLE
<style>
div#adminmenumain {
  display: none;
}
</style>
STYLE;

echo $style;
  
}
add_action( 'admin_init', 'ehw_hide_sidebar_menu' );