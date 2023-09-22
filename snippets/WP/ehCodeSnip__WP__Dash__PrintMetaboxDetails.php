<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Dashboard: Dump Meta Box Details
Author: Eric Hepperle
Date Created: 2023-08-10

DESCRIPTION:

- Dumps keys from the PHP $GLOBALS superglobal. Displays at top over everything else
- Offset displays to right of sidebar
- #GOTCHA: I don't think this one works quite right -- elements are truncated. Maybe need to use the "explode" version?

SAMPLE RESULTS:

T:\csite_30_elijahStreams\_dev\wp-content\plugins\code-snippets\php\snippet-ops.php(575) : eval()'d code:30:
array (size=1)
  'dashboard' => 
    array (size=2)
      'normal' => 
        array (size=1)
          'core' => 
            array (size=6)
              ...
      'side' => 
        array (size=1)
          'core' => 
            array (size=2)
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


function elsm_dump_metaboxes() {

    global $wp_meta_boxes;

    echo "<pre class='ehw-offset-from-sb'>";
    echo var_dump($wp_meta_boxes);
    echo "</pre>";
    
    elsm_results_offset_sidebar();

}
add_action( 'wp_dashboard_setup', 'elsm_dump_metaboxes' );