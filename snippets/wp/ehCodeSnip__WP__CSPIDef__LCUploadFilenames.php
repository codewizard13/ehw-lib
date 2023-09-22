<?php

/* 
Type: WordPress Code Snippet
TITLE: Make upload filenames lowercase
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Default snippet included with Code Snippets plugin (2023)

Code Snippets Plugin Settings:
- run everywhere

*/

add_filter( 'sanitize_file_name', 'mb_strtolower' );