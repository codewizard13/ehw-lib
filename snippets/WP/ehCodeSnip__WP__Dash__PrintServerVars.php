<?php

/* 
Type: WordPress Code Snippet
TITLE: Print Server Variables
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Print server variables in backend at top of page.

Code Snippets Plugin Settings:
- Only run in administration area


TAGS:

Runs in Admin Only, Super Globals, PHP, Server Vars
*/

function dump_server_vars()
{
  $serverVars = $_SERVER;

  echo "<pre>";
  var_dump($serverVars);
  echo "</pre>";
}
add_action('admin_notices', 'dump_server_vars');