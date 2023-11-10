<?php

/* 
Type: WordPress Code Snippet
TITLE: EH: Search Results - Filter by CPT Guest
Author: Eric Hepperle
Date Created: 2023-11-10

DESCRIPTION:

- Display only search results of post type 'guest'.

- $parent_slug : this is an id you make up. It should be self explanatory, in this case 'adminbar-date-time'
- 'top-secondary' : tells WP to put this node / link / text on the right side
- the "600" in add_action() : means keep it on the leftmost of that rightmost section
- $title : This the text that actually displays in the admin bar. Can be text, variables, and HTML. Here we calculate the date and time first as $local_time and the result of that  variable is what will display in the admin bar. If we wanted we could do 'title' => __( 4 * 8 ), and "32" is what would be shown in the admin bar.
- href : set as "null" because no link is needed
- Finally, HOVER is disabled for all children of the menu item


SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Run snippet everywhere


TAGS:

CPT, filter, search results, custom query

REFERENCES:
- https://www.smashingmagazine.com/2016/03/advanced-wordpress-search-with-wp_query/
- https://www.hostinger.com/tutorials/wordpress-wp_query
- https://developer.wordpress.org/reference/classes/wp_query/
- https://wpshout.com/using-wp_query-objects-without-loop/#gref
- https://stackoverflow.com/questions/24195818/add-results-into-wordpress-search-results/24201166#24201166
- https://wordpress.stackexchange.com/questions/188861/insert-div-container-below-1st-search-result
- https://www.smashingmagazine.com/2009/08/10-useful-wordpress-hook-hacks/
- https://www.hostinger.com/tutorials/what-are-wordpress-hooks/#customize_loaded_components
- https://codex.wordpress.org/Plugin_API/Action_Reference#Blogroll_Actions
- https://developer.wordpress.org/reference/functions/is_search/
- https://stackoverflow.com/questions/17370402/how-to-print-a-wordpress-query
- https://www.reddit.com/r/ProWordPress/comments/17rejf2/how_to_print_out_wp_query_on_search_results_page/
- https://wordpress.stackexchange.com/questions/271628/filter-the-query-only-for-the-search-results-page
*/

function elsm_filter_search_results_by_guest( $query ) {
  $query->set( 'post_type', ['guests'] );
}
add_action( 'elementor/query/elsm_filter_search_by_guest', 
'elsm_filter_search_results_by_guest' );