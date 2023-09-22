<?php

/* 
Type: WordPress Code Snippet
TITLE: Dashboard: Determine Browser
Author: Code Snippets plugin
Date Created: 2023-08-10

DESCRIPTION:

- Determines which browser family is currently being used (browser detection) 
- Displays at top over everything else offset to right of sidebar

SAMPLE RESULTS:

Browser Family: Chrome


SNIPPETS SETTINGS:
- Only run in administration area


TAGS:

Runs in Admin Only, Super Globals, PHP, Server Vars
*/

function ehw_results_offset_sidebar() {

    // Results display in offwhite box offset to the right of sidebar	
    $style =<<<STYLE
    <style>
    .ehw-inline-div {
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
function ehw_determine_browser() {

  if ($GLOBALS['is_chrome']) {
    $browserFamily = "Chrome";
  } elseif ($GLOBALS['is_edge']) {
    $browserFamily = "Edge";
  } elseif ($GLOBALS['is_gecko']) {
    $browserFamily = "Firefox";
  }
    

$html =<<<HTML
<div class="ehw-inline-div">
<b>Browser Family:</b> {$browserFamily}
</div>
HTML;
echo $html;
    
ehw_results_offset_sidebar();

}
add_action( 'admin_init', 'ehw_determine_browser' );