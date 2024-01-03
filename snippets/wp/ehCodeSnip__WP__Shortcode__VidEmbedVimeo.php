<?php

/* 
Type:         WordPress Code Snippet
Sub-Type:     SHORTCODE
TITLE:        ElementHow: Dynamic Iframe - Vid Embed Vimeo
Author:       Eric Hepperle
Date Created: 2024-01-03

DESCRIPTION:

- From tutorial: https://element.how/elementor-dynamic-iframe/

- Create custom iframe shortcode.
- This snippet is mostly as given in the tutorial, and given an video ide, will display a Vimeo video.
- The field in ELSMS that we are testing with is 'embed'. Here, we should put the video id
- This is a mid-way exercise, not the final snippet

SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Run snippet everywhere

TAGS:

Shortcode, Vimeo, Video Embed, Iframe

REFERENCES:
- N/A

*/

function shortcode_render_vimeo_iframe_from_id($atts)
{
  global $post;

  // You can change the default custom field name here
  // The "Rumble iFrame" field slug is 'embed'
  $default_custom_field_name = 'embed';

  // Merge user-provided attributes and set default values
  $atts = shortcode_atts(
    [
      'field' => $default_custom_field_name,
    ],
    $atts,
    'vimeo_iframe'
  );

  // Get custom field value using native WordPress function
  $iframe_id = get_post_meta($post->ID, $atts['field'], true);

  // 'Before' HTML part. Edit this part to customize the beginning of the output
  $before_html = '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/';

  // 'After' HTML part. Edit this part to customize the end of the output
  $after_html = '?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="012023_Impact on Mothers"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';

  // Construct and return the full HTML
  if ($iframe_id) {
    return $before_html . $iframe_id . $after_html;
  } else {
    return "ID $iframe_id not found";
  }
}

// Register shortcode
add_shortcode('vimeo_iframe', 'shortcode_render_vimeo_iframe_from_id');



847341554