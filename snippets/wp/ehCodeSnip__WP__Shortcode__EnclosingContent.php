<?php

/* 
Type:         	WordPress Code Snippet
Sub-Type:     	SHORTCODE
TITLE:        	Kinsta: SHORTCODE - Enclosing, Box
Author:       	Eric Hepperle
Date Created: 	2024-01-03

DESCRIPTION:

- From tutorial: https://www.youtube.com/watch?v=izIDOiQgWcU
- Renders a box to front end that outputs any content between its tags with colorful titles
- #GOTCHA: Change code from class="button ' . esc_attr( $a['color'] ) 
to class="button " style="background:' . esc_attr( $a['color'] ). If we had enqueued a stylesheet, presumably there would be classes in there. But, since we are not enqueuing a stylesheet with named color classes, I edited the shortcode to add a style attribute to our button and set the background color that way.

USAGE:

Input something like this:

[boxed title="This is the title!" title_color="yellow" color="#5333ed"]This is my shortcode content for the box. Box, box, box...box[/boxed]

SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Run snippet everywhere

TAGS:

Shortcode, WordPress Developers, Shortcode Parameters, Shortcode Parsing

REFERENCES:
- N/A

*/


/** Enqueuing the Stylesheet for Salcodes */

/**
 * [boxed] returns the HTML code for a content box with colored titles.
 * @return string HTML code for boxed content
*/

add_shortcode( 'boxed', 'salcodes_boxed' );

function salcodes_boxed( $atts, $content = null, $tag = '' ) {
 $a = shortcode_atts( array(
 'title' => 'Title',
 'title_color' => 'white',
 'color' => 'blue',
 ), $atts );
 
 $output = '<div class="salcodes-boxed" style="border:2px solid ' . esc_attr( $a['color'] ) . ';">'.'<div class="salcodes-boxed-title" style="background-color:' . esc_attr( $a['color'] ) . ';"><h3 style="color:' . esc_attr( $a['title_color'] ) . ';">' . esc_attr( $a['title'] ) . '</h3></div>'.'<div class="salcodes-boxed-content"><p>' . esc_attr( $content ) . '</p></div>'.'</div>';
 
 return $output;
}