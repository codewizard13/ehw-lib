<?php

/* 
Type: WordPress Code Snippet
TITLE: EH: Search Results - Filter by CPT Episode
Author: Eric Hepperle
Date Created: 2023-11-10

DESCRIPTION:

- Display only search results of post type 'episode'.

- #GOTCHA: Post type is 'videos' not 'episodes'
- #GOTCHA: Post type is 'videos' (plural) not 'video'


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

function elsm_filter_search_results_by_episode( $query ) {
  $query->set( 'post_type', ['videos'] );
}
add_action( 'elementor/query/elsm_filter_search_by_episode', 
'elsm_filter_search_results_by_episode' );