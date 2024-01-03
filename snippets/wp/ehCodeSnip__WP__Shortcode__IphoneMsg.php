<?php

/* 
Type:         	WordPress Code Snippet
Sub-Type:     	SHORTCODE
TITLE:        	Ray DelVecchio: SHORTCODE - iPhone Text Message
Author:       	Eric Hepperle
Date Created: 	2024-01-03

DESCRIPTION:

- From tutorial: https://www.youtube.com/watch?v=pbekOEr0Wo0
- Renders messages styled like iphone text messages via enclosing shortcodes

SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Run snippet everywhere

TAGS:

Shortcode, Ray DelVecchio, iPhone, SMS Text Mesage

REFERENCES:
- N/A

*/


// Add Shortcode
function imsg_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'reply' => false,
		),
		$atts
	);

  // Check if reply and assign the HTML class attribute
  $msgType = esc_attr($atts['reply']) ? 'reply' : 'first';
  
  return "<div class='imsg $msgType'>$content</div>";

}
add_shortcode( 'imsg', 'imsg_shortcode' );


