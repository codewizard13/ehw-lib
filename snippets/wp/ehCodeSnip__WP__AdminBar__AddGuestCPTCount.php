<?php

/* 
Type: WordPress Code Snippet
TITLE: EH: Add Guests CPT Count to Admin Bar
Author: Eric Hepperle
Date Created: 2023-09-07

DESCRIPTION:

- Adds a count of the Guests custom post type to admin bar

SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, PHP, CPT, Post Count

REFERENCES:
- https://wordpress.stackexchange.com/questions/238668/how-to-add-some-custom-html-into-wordpress-admin-bar
*/

add_action( 'admin_bar_menu', 'ehw_admin_bar_add_guests_count', 900 );

function ehw_admin_bar_add_guests_count( $wp_admin_bar ){

	$bgcolor = "navy";
	
	$guest_posts_published = wp_count_posts( $post_type = 'guests')->publish;

   $admin_bar_args = array(
      'id' => 'ehw_guests_count',
      'title' => "Guests: $guest_posts_published" // this is the visible portion in the admin bar.
   );

   $wp_admin_bar->add_node($admin_bar_args);
}

// GOTCHA: This works, BUT the Vid CPT count snippet needs to be changed to match