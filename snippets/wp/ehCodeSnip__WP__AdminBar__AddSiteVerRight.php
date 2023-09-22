<?php

/* 
Type: WordPress Code Snippet
TITLE: EH: Admin Bar - Add Site Version to Right
Author: Eric Hepperle
Date Created: 2023-09-21

DESCRIPTION:

- Adds site version to RIGHT part of admin bar
- Set site version in custom metabox on Dashboard home screen

CAVEAT: This code is tested and verified it works as of Sept 2023. However, WordPress is always changing, so it is possible if you are reading this in ten years it may not be valid anymore.

- $parent_slug : this is an id you make up. It should be self explanatory, in this case 'adminbar-date-time'
- 'top-secondary' : tells WP to put this node / link / text on the right side
- the "600" in add_action() : means keep it on the leftmost of that rightmost section
- $title : This the text that actually displays in the admin bar. Can be text, variables, and HTML. Here we calculate the date and time first as $local_time and the result of that  variable is what will display in the admin bar. If we wanted we could do 'title' => __( 4 * 8 ), and "32" is what would be shown in the admin bar.
- href : set as "null" because no link is needed
- Finally, HOVER is disabled for all children of the menu item


SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, PHP, Admin Bar, Site Version, Hover

REFERENCES:
- https://wordpress.stackexchange.com/questions/238668/how-to-add-some-custom-html-into-wordpress-admin-bar
- https://developer.wordpress.org/reference/hooks/admin_bar_menu/
*/

add_action( 'admin_bar_menu', 'ehw_add_site_version_admin_bar', 600 );
function ehw_add_site_version_admin_bar( WP_Admin_Bar $wp_admin_bar ) {
?>

<style>
li#wp-admin-bar-ehw-adminbar-site-version {
  background: whitesmoke !important;
}
li#wp-admin-bar-ehw-adminbar-site-version * {
  background: inherit !important;
}
</style>

<?php


	if (get_option('site_version')) {
    	$site_ver = get_option('site_version');
		$title_str = "<h2 style='color:brown; font-weight: 700; font-weight; 900; font-family: Roboto, Arial, sans-serif; text-align: right;'>$site_ver</h2>";
	}


  $parent_slug = 'ehw-adminbar-site-version';

  $wp_admin_bar->add_menu( array(
      'id'    => $parent_slug,
      'parent' => 'top-secondary',
      'group'  => null,
      'title' => __( $title_str ),
      'href'  => null,
  ) );

}