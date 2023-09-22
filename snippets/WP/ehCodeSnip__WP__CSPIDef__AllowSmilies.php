<?php

/* 
Type: WordPress Code Snippet
TITLE: Allow smilies
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Default snippet included with Code Snippets plugin (2023)

- Allows smiley conversion in obscure places. This is a sample snippet. Feel free to use it, edit it, or remove it.

Code Snippets Plugin Settings:
- run everywhere

*/

add_filter( 'widget_text', 'convert_smilies' );
add_filter( 'the_title', 'convert_smilies' );
add_filter( 'wp_title', 'convert_smilies' );
add_filter( 'get_bloginfo', 'convert_smilies' );