<?php

/* 
Type: WordPress Code Snippet
TITLE: EH DASH: Add Date & Time Below Admin Bar
Author: Eric Hepperle
Date Created: 2023-09-08

DESCRIPTION:

- Adds current formatted date and time to RIGHT part of admin bar

Add date and time to right side of the admin bar near the "Howdy" and avatar section

CAVEAT: This code is tested and verified it works as of Sept 2023. However, WordPress is always changing, so it is possible if you are reading this in ten years it may not be valid anymore.

- $parent_slug : this is an id you make up. It should be self explanatory, in this case 'adminbar-date-time'
- 'top-secondary' : tells WP to put this node / link / text on the right side
- the "500" in add_action() : means keep it on the leftmost of that rightmost section
- $local_time : uses the WP API current_time() function to grab the time and date for the timezone registered in Settings > General
- $title : This the text that actually displays in the admin bar. Can be text, variables, and HTML. Here we calculate the date and time first as $local_time and the result of that  variable is what will display in the admin bar. If we wanted we could do 'title' => __( 4 * 8 ), and "32" is what would be shown in the admin bar.
- href : If you are making this a hyperlink then put the destination URL here. In this example, "options-general.php" is the Settings > General page so you can change time and date if you want



SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, PHP, Admin Bar, Avatar, Howdy

REFERENCES:
- https://wordpress.stackexchange.com/questions/238668/how-to-add-some-custom-html-into-wordpress-admin-bar
- https://developer.wordpress.org/reference/hooks/admin_bar_menu/
*/

add_action( 'admin_bar_menu', 'ehw_add_date_time_adminbar_right', 500 );
function ehw_add_date_time_adminbar_right( WP_Admin_Bar $wp_admin_bar ) {

    $parent_slug = 'ehw-adminbar-date-time';

    $local_time  = date( 'Y-m-d, g:i a', current_time( 'timestamp', 0 ));

    $wp_admin_bar->add_menu( array(
        'id'    => $parent_slug,
        'parent' => 'top-secondary',
        'group'  => null,
        'title' => __( $local_time ),
        'href'  => admin_url('/options-general.php'),
    ) );

}