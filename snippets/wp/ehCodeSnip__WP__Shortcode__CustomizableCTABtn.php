<?php

/* 
Type:         	WordPress Code Snippet
Sub-Type:     	SHORTCODE
TITLE:        	Kinsta: SHORTCODE - Customizable CTA button
Author:       	Eric Hepperle
Date Created: 	2024-01-03

DESCRIPTION:

- From tutorial: https://www.youtube.com/watch?v=izIDOiQgWcU
- Renders CTA button on front end with CSS style values passed as shortcode parameters
- #GOTCHA: Change code from class="button ' . esc_attr( $a['color'] ) 
to class="button " style="background:' . esc_attr( $a['color'] ). If we had enqueued a stylesheet, presumably there would be classes in there. But, since we are not enqueuing a stylesheet with named color classes, I edited the shortcode to add a style attribute to our button and set the background color that way.

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
 * [cta_button] returns the HTML code for a CTA Button.
 * @return string Button HTML Code
*/

add_shortcode( 'cta_button', 'salcodes_cta' );

function salcodes_cta( $atts ) {
 $a = shortcode_atts( array(
 'link' => '#',
 'id' => 'salcodes',
 'color' => 'blue',
 'size' => '',
 'label' => 'Button',
 'target' => '_self'
 ), $atts );
 $output = '<p><a href="' . esc_url( $a['link'] ) . '" id="' . esc_attr( $a['id'] ) . '" class="button " style="position: absolute; background:' . esc_attr( $a['color'] ) . '" ' . esc_attr( $a['size'] ) . '" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['label'] ) . '</a></p>';
 return $output;
}

/** Enqueuing the Stylesheet for the CTA Button */

// function salcodes_enqueue_scripts() {
//  global $post;
//  if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'cta_button') ) {
//  wp_register_style( 'salcodes-stylesheet',  plugin_dir_url( __FILE__ ) . 'css/style.css' );
//      wp_enqueue_style( 'salcodes-stylesheet' );
//  }
// }
// add_action( 'wp_enqueue_scripts', 'salcodes_enqueue_scripts');