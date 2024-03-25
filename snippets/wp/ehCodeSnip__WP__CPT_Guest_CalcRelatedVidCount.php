<?php

/* 
Type:         	WordPress Code Snippet
Sub-Type:     	N/A
TITLE:        	GUESTS: Calculate & Store Related Video Count
Author:       	Eric Hepperle
Date Created: 	2024-03-07

DESCRIPTION:

- Automatically counts how many videos a guest is related to and stores that count in the "_video_count" field for that guests. This snippet re-calculates every guest's total whenever any guest post is published or updated.

SAMPLE RESULTS:

N/A

USAGE:

N/A

SNIPPETS SETTINGS:
- Only run in admin area

REQUIREMENTS & DEPENDENCIES:
- CPT "guests" EXISTS and has:
  - Field: _video_count
- CPT "videos" EXISTS and has:
  - Field: guest_names

TAGS:

CPT, Custom Fields, Meta Fields, Calculations, Relationship Fields

REFERENCES:
- Bing Copilot (AI)

*/


/**
 * Calculate and update the video count for all guests based on reverse relationship.
 */
function calculate_and_update_video_count() {
  // Get all guest posts (adjust the post type name if needed)
  $guests_query = new WP_Query(array(
      'post_type' => 'guests', // Replace with your actual guest post type
      'posts_per_page' => -1, // Retrieve all posts
  ));

  if ($guests_query->have_posts()) {
      while ($guests_query->have_posts()) {
          $guests_query->the_post();

          // Get the related video IDs using the ACF reverse relationship field
          $related_videos = get_posts(array(
              'post_type' => 'videos', // Replace with your actual video post type
      'numberposts' => -1,
              'meta_query' => array(
                  array(
                      'key' => 'guest_names', // Replace with the actual ACF field name for reverse relationship
                      'value' => get_the_ID(),
                      'compare' => 'LIKE',
                  ),
              ),
          ));

          // Calculate the video count
          $video_count = count($related_videos);

          // Update the custom field "_video_count"
          update_post_meta(get_the_ID(), '_video_count', $video_count);
      }

      // Reset the post data
      wp_reset_postdata();
  }
}

// Hook into an appropriate action (e.g., when saving a post)
add_action('save_post', 'calculate_and_update_video_count');

