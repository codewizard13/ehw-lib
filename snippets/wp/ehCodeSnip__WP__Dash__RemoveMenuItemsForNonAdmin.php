<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Remove Admin Menu Items for all but ADMINS
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Remove admin dashboard menu items for all but admins.
- Removing  most menu options for non-admins incl. themes, plugins, comments, settings, media, etc.
- https://www.youtube.com/watch?v=n0m9N9c6_uY&t=1149s

Code Snippets Plugin Settings:
- Only run in administration area


TAGS:

Runs in Admin Only, Super Globals, PHP, Server Vars
*/

function elsm_remove_wpadmin_menus_for_some_users()
{
	global $current_user;
		
	$users = array(3,4,5);
	
	$role = $current_user->roles[0];

// 	Remove for all roles except administrator
	if ($role !== "administrator") {
		remove_menu_page('themes.php');
		remove_menu_page('plugins.php');
		remove_menu_page('users.php');
		remove_menu_page('tools.php');
		remove_menu_page('upload.php'); // Media
		remove_menu_page('edit.php'); // Posts
		remove_menu_page('edit-comments.php'); // Comments
		remove_menu_page('options-general.php'); // Settings
		remove_menu_page('edit.php?post_type=page');
// 		remove_menu_page('index.php'); // Dashboard
		
		// Menu Items from Plugins
		remove_menu_page('templately'); // Templately
		remove_menu_page('blc_dash'); // Broken Link Checker

	}
}
add_action('admin_menu', 'elsm_remove_wpadmin_menus_for_some_users');