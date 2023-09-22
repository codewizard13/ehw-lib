<?php

/* 
Type: WordPress Code Snippet
TITLE: EH DASH: Add Date & Time
Author: Eric Hepperle
Date Created: 2023-09-08

DESCRIPTION:

- Adds current formatted date and time below admin bar

SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, PHP, Admin Bar

REFERENCES:
- https://wordpress.stackexchange.com/questions/238668/how-to-add-some-custom-html-into-wordpress-admin-bar
*/

add_action( 'admin_bar_menu', 'ehw_add_date_time_below_adminbar', 900 );

function ehw_add_date_time_below_adminbar( $wp_admin_bar ){
	
	$local_time  = date( 'Y-m-d, g:i a', current_time( 'timestamp', 0 ));

	echo "<h3 style='color:brown; background: pink; display: inline-block; overflow: hidden; padding: .3rem .6rem; margin: 0 .3rem;'>$local_time</h3>";

}
    