<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Dump Sidebar Menu Names
Author: Code Snippets plugin
Date Created: 2023-08-10

DESCRIPTION:

- Dumps PHP array vars from the "menu" global displays at BOTTOM above footer, offset from sidebar so no need to hide sidebar.
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

add_action( 'admin_footer', 'ehw_dump_admin_menu_vars' );

function ehw_dump_admin_menu_vars() {

	elsm_results_offset_sidebar();
	
    echo '<pre class="ehw-offset-from-sb">' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
}

function elsm_results_offset_sidebar() {

// Results display in offwhite box offset to the right of sidebar	
$style =<<<STYLE
<style>
.ehw-offset-from-sb {
    border: solid 1px teal;
    position: relative;
    z-index: 3;
    left: 11rem;
    width: 30%;
    overflow: hidden;
    background: floralwhite;
    padding: 1rem;
}
</style>
STYLE;
	
	echo $style;
		
}