<?php

/* 
Type: WordPress Code Snippet
TITLE: Disable admin bar
Author: Code Snippets plugin
Date Created: 2023-08-09

DESCRIPTION:

- Default snippet included with Code Snippets plugin (2023)

- Turns off the WordPress admin bar for everyone except administrators. This is a sample snippet. Feel free to use it, edit it, or remove it.

Code Snippets Plugin Settings:
- Only run on site front-end

*/

add_action( 'wp', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		show_admin_bar( false );
	}
} );