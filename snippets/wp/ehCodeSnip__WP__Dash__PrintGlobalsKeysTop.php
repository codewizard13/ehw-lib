<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Dump $GLOBALS Keys Top
Author: Code Snippets plugin
Date Created: 2023-08-10

DESCRIPTION:

- Dumps keys from the PHP $GLOBALS superglobal. Displays at top over everything else
- Offset displays to right of sidebar

SAMPLE RESULTS:

 1. CTRLS_DUP_PRO_CTRL_Package
 2. CTRLS_DUP_PRO_CTRL_Tools
 3. DUPLICATOR_PRO_GLOBAL_DIR_FILTERS_ON
 4. DUPLICATOR_PRO_GLOBAL_FILE_FILTERS_ON
 5. DUPLICATOR_PRO_OPTS_DELETE
 6. DUPLICATOR_PRO_SERVER_LIST
 7. DUP_PRO_Package_Screen
 8. GLOBALS
 9. PHP_SELF
10. _COOKIE
11. _ENV
12. _FILES
13. _GET
14. _POST
15. _REQUEST
16. _SERVER
17. __composer_autoload_files
18. _parent_pages


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
    
    function elsm_dump_globals_keys() {
    
        $globals = $GLOBALS;
        ksort($globals);
    
        elsm_results_offset_sidebar();
        
        echo '<div class="ehw-offset-from-sb">';
    
        echo "<ol>";
        echo "<li>" . implode( '</li><li>', array_keys($GLOBALS) ) . "</li>";
        echo "</ol>";
        
        echo '</div>';
    
        
    }
    add_action( 'admin_init', 'elsm_dump_globals_keys' );
    