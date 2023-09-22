<?php

/* 
Type: WordPress Code Snippet
TITLE: Get Latest Post ID
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Get the latest post ID
- CAVEAT: Pretty much everything in WordPress is some type of "post" including CPTs, templates, pages, etc

Code Snippets Plugin Settings:
- run everywhere

*/

/******************************************
 * get latest post
 * use in loop if ( is_latest() ) { stuff; }
 ******************************************/	
function latest_post_ID() {
  global $post;
  $loop = get_posts( 'numberposts=1' );
  $latest = $loop[0]->ID; 
  return ( $post->ID == $latest ) ? $post->ID : null;
}

function latest_post_ID2() {
$args = array( 
    'post_type' => 'any'
);

$the_ID = get_posts($args);
$latest_ID = $the_ID[0]->ID;
echo $latest_ID;
}

function ehw_action_echo_latestPostID( ) {
echo "<H3>HEY! The latest post ID is: " . latest_post_ID2() . "<H3>";
}
add_action( 'wp_footer', 'ehw_action_echo_latestPostID' );