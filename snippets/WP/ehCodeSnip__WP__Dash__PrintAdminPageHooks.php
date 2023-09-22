<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Dump Admin Page Hooks
Author: Code Snippets plugin
Date Created: 2023-08-10

DESCRIPTION:

- Dumps list of admin_page_hooks from $GLOBALS. 
- Displays at top over everything else offset to right of sidebar

SAMPLE RESULTS:

Array
(
    [index.php] => dashboard
    [separator1] => separator1
    [upload.php] => media
    [link-manager.php] => links
    [edit-comments.php] => comments
    [edit.php] => posts
    [edit.php?post_type=page] => pages
    [edit.php?post_type=elementor_library] => elementor_library
    [edit.php?post_type=businesses] => businesses
    ...


SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, Super Globals, PHP, Server Vars
*/

function elsm_results_offset_sidebar() {

    // Results display in offwhite box offset to the right of sidebar	
    $style =<<<STYLE
    <style>
    .ehw-offset-from-sb {
        border: solid 4px teal;
        position: absolute;
        top: 3rem;
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
    
function elsm_dump_admin_page_hooks() {

    $globals = $GLOBALS;
    ksort($globals);
    
    echo '<pre class="ehw-offset-from-sb">' . print_r( $GLOBALS[ 'admin_page_hooks' ], TRUE) . '</pre>';
    
    elsm_results_offset_sidebar();

    
}
add_action( 'admin_init', 'elsm_dump_admin_page_hooks' );
    