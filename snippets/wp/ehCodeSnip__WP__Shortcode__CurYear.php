<?php

/* 
Type:         WordPress Code Snippet
Sub-Type:     SHORTCODE
TITLE:        Kinsta: SHORTCODE - Current Year
Author:       Eric Hepperle
Date Created: 2024-01-03

DESCRIPTION:

- From tutorial: https://www.youtube.com/watch?v=izIDOiQgWcU
- Prints current year

SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Run snippet everywhere

TAGS:

Shortcode, WordPress Developers, Shortcode Parameters, Shortcode Parsing

REFERENCES:
- N/A

*/


/**
 * [current_year] returns the current Year as a 4-digit string.
 * @return string Current Year
 */

add_shortcode( 'current_year', 'salcodes_year' );

function salcodes_init() {
	function salcodes_year() {
		return getdate()['year'];
	}
}
add_action( 'init', 'salcodes_init' );
