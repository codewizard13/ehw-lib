<?php

/* 
Type: WordPress Code Snippet
TITLE: Allow Media Import
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- https://wordpress.stackexchange.com/questions/117344/failed-to-import-media

  I had a very similar problem when I moved a WordPress Blog from a single WordPress installation to a Multisite installation with different domain names but same IP.
  I found out that the problem is the wp_http_validate_url function which drops the URL if the source IP is the same as the destination IP.
  You can add a filter wp_http_validate_url to prevent this and allow matching source and destination IPs:

  add_filter( 'http_request_host_is_external', '__return_true' );

  Please see this answer for detailed explanation of the filter hook and why you should remove it after the import: https://wordpress.stackexchange.com/a/123313/75573

Code Snippets Plugin Settings:
- run everywhere

*/

add_filter( 'http_request_host_is_external', '__return_true' );