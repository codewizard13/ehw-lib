<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Dump Sidebar Menu Names
Author: Code Snippets plugin
Date Created: 2023-08-10

DESCRIPTION:

- Dumps PHP array vars from the "menu" global displays at top below topbar.
- Hides sidebar first

SAMPLE RESULTS:

Array
(
    [0] => Array
        (
            [0] => Dashboard
            [1] => read
            [2] => index.php
            [3] => 
            [4] => menu-top menu-top-first menu-icon-dashboard menu-top-first menu-top-last
            [5] => menu-dashboard
            [6] => dashicons-dashboard
        )

    [1] => Array
        (
            [0] => 
            [1] => read
            [2] => separator1
            [3] => 
            [4] => wp-menu-separator
        )

    [2] => Array
        (
            [0] => Media
            [1] => upload_files
            [2] => upload.php
            [3] => 
            [4] => menu-top menu-icon-media menu-top-first
            [5] => menu-media
            [6] => dashicons-admin-media
        )


SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, Super Globals, PHP, Server Vars
*/

add_action( 'admin_init', 'wpse_136058_debug_admin_menu' );

function wpse_136058_debug_admin_menu() {

	elsm_hide_sidebar_menu();
	
    echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
}

function elsm_hide_sidebar_menu() {

	// Hide sidebar menu when displaying debug variables	
	$style =<<<STYLE
	<style>
	div#adminmenumain {
		display: none;
	}
	</style>
	STYLE;
	
	echo $style;
		
}