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
- #GOTCHA: Triangle pointer had gap so tweaked bottom, right, left values for :before rules

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

?>
<style>
/**
SHORTCODE: imsg - iPhone text message style
*/

.imsg {
  position: relative;
  font-size: 1.3em;
  font-family: "Helvetica Neue", Arial, sans-serif;
  line-height: 1.3em;
  -webkit-border-radius: 25px;
  -moz-border-radius: 25px;
  border-radius: 25px;
  padding: 15px;
}

.imsg:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  position: absolute;
}

.imsg.first {
  background: #2C7CFE;
  color: #fff;
  margin: 20px 12px 20px 50px;
}

.imsg.first:before {
  border-top: 12px solid transparent;
  border-bottom: 12px solid transparent;
  border-left: 12px solid #2C7CFE;
  bottom: 19px;
  right: -9px;
}

.imsg.reply {
  background: #DDD;
  color: #222;
  margin: 20px 50px 20px 12px;
}

.imsg.reply:before {
  border-top: 12px solid transparent;
  border-bottom: 12px solid transparent;
  border-right: 12px solid #DDD;
  border-left: none;
  bottom: 19px;
  left: -9px;
}

</style>
<?php
