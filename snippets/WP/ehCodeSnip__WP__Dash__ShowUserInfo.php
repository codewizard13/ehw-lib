<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Display User Info in Admin
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Displays yellow info box at page top in admin area with user ID and user role.

SAMPLE RESULTS:

User ID: 1
User Role: administrator


Code Snippets Plugin Settings:
- Only run in administration area


TAGS:

Runs in Admin Only, Super Globals, PHP, Server Vars
*/

function elsm_display_user_info_wpadmin()
{
$style=<<<STYLE
<style>
.elsm-info-box {
	background: yellow;
    position: absolute;
    left: 23%;
    z-index: 999;
    display: inline-block;
    padding: 0.2rem;
    border: solid;
//     top: 2.2rem;
}
</style>
STYLE;
	
echo $style."<br><br>";
	
	global $current_user;
		
	$users = array(3,4,5);
	$user_id = $current_user->ID;
	$role = $current_user->roles[0];

	echo "<div class='elsm-info-box'>";
	echo "<b>User ID:</b> $user_id<br>";
	echo "<b>User Role:</b> $role<br>";
	echo "</div>";

}
add_action('admin_menu', 'elsm_display_user_info_wpadmin');