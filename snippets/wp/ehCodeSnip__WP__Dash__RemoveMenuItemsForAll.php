<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Remove Admin Menus for All User Roles
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- These are admin sidebar menu items not even admin needs access to. Primarily things not in use. For instance, the default "Posts" post type will never be used so we will disable it.

Code Snippets Plugin Settings:
- Run snippet everywhere


TAGS:

*/

function elsm_remove_wpadmin_menus_for_all_users()
{
	global $current_user;
	
	$role = $current_user->roles[0];
	
// 		remove_menu_page('themes.php');
// 		remove_menu_page('plugins.php');
// 		remove_menu_page('users.php');
// 		remove_menu_page('tools.php');
// 		remove_menu_page('upload.php'); // Media
		remove_menu_page('edit.php'); // Posts
// 		remove_menu_page('edit-comments.php'); // Comments
// 		remove_menu_page('options-general.php'); // Settings
// 		remove_menu_page('edit.php?post_type=page');
// 		remove_menu_page('index.php'); // Dashboard
}
add_action('admin_menu', 'elsm_remove_wpadmin_menus_for_all_users');