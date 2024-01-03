<?php

/* 
Type: WordPress Code Snippet
TITLE: EH: Search Results - Filter by CPT Guest
Author: Eric Hepperle
Date Created: 2023-11-10

DESCRIPTION:

- Display only search results of post type 'guest'.

- #GOTCHA: Post type is 'videos' not 'episodes'
- #GOTCHA: Post type is 'videos' (plural) not 'video'


SAMPLE RESULTS:

N/A

SNIPPETS SETTINGS:
- Run snippet everywhere


TAGS:

CPT, group, search results, custom query

REFERENCES:
- N/A
*/

// function elsm_group_episodes_by_guest( $query ) {
  
//   global $wpdb;
  

//   $args = array(
//     'orderby' => ''
//   );
  
//   $query->set( 'post_type', [''] );
// }
// add_action( 'elementor/query/elsm_group_episodes_by_guest', 
// 'elsm_group_episodes_by_guest' );

global $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type='episode' LIMIT 10");






function wpc_elementor_shortcode( $atts ) {
  echo "This is my custom PHP output in Elementor!<br>";

// 	global $wpdb;
// 	$wpdb->get_results("SELECT * FROM wp_posts WHERE post_type='episode' LIMIT 10");

  $args = [
    'post_type' => 'videos'
  ];

  $posts = get_posts();

  echo "<h3>Total posts found: " . count($posts) . "</h3>";

  // foreach ($posts as $post) : setup_postdata( $post );

  //   the_title();
  //   the_content();
    
  // endforeach;


}
add_shortcode( 'my_elementor_php_output', 'wpc_elementor_shortcode');









function wpc_elementor_shortcode( $atts ) {
	
  // $query = new WP_Query( array( 'author' => 1 ) );
    
  // 	echo "<h3>Query Results Count: " . count($query) . "</h3>";
  
  // 	$post_types = get_post_types();
  // 	echo "<pre>";
  // 	var_dump($post_types);
  // 	echo "</pre>";
  // 	
  
    $videos_query = array();
  
    $the_query = get_posts('post_type=videos');
  
    foreach ( $the_query as $post ) : setup_postdata( $post );
    $videos_query[] = array(
      'id'       => get_post_meta(get_the_ID(), 'idkey', true ),
      'field1'   => get_post_meta(get_the_ID(), 'field1key', true ),
      'title'    => get_the_title($post->ID)
    );
    endforeach;
    wp_reset_postdata();
    return $videos_query;
  
  
  
  
  }
  add_shortcode( 'my_elementor_php_output', 'wpc_elementor_shortcode');




  
$args = array(
  // Define the arguments for the new query
);

$myQuery = new WP_Query( $args );

add_action( 'admin_bar_menu', 'ehw_add_site_version_admin_bar', 600 );
function ehw_add_site_version_admin_bar( WP_Admin_Bar $wp_admin_bar ) {
?>

<style>
li#wp-admin-bar-ehw-adminbar-site-version {
  background: whitesmoke !important;
}
li#wp-admin-bar-ehw-adminbar-site-version * {
  background: inherit !important;
}
</style>

<?php


	if (get_option('site_version')) {
    	$site_ver = get_option('site_version');
		$title_str = "<h2 style='color:brown; font-weight: 700; font-weight; 900; font-family: Roboto, Arial, sans-serif; text-align: right;'>$site_ver</h2>";
	}


  $parent_slug = 'ehw-adminbar-site-version';

  $wp_admin_bar->add_menu( array(
      'id'    => $parent_slug,
      'parent' => 'top-secondary',
      'group'  => null,
      'title' => __( $title_str ),
      'href'  => null,
  ) );

}






function elsm_wp_query_simple() {
  $args = array(
    'numberposts' = '4',
    // 'category_name' = 'slider'
  );
  
  $slider_posts = get_posts( $args );
  
  if ( $slider_posts ) {
    foreach ( $slider_posts as $post ) :
  
      // First, setup post data
      setup_postdata( $post ); 
  
      // Second, define content to display ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <!--setup_postdata() required for the_title() and the_content() to work--><?php
    endforeach;
  
    // Third, reset post data after end of the foreach function
    wp_reset_postdata();
  }

}
add_shortcode( 'elsm_wp_query_demo', 'elsm_wp_query_simple' )





function elsm_wp_query_simple() {
	
	global $wbdb;
	global $query;
	
  $args = array(
    'numberposts' => '4',
	  'post_type' => 'videos',
  );
  
  $slider_posts = get_posts( $args );
  
  if ( $slider_posts ) {
    foreach ( $slider_posts as $post ) :
  
      // First, setup post data
      setup_postdata( $post ); 
  
      // Second, define content to display ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <!--setup_postdata() required for the_title() and the_content() to work--><?php
    endforeach;
  
    // Third, reset post data after end of the foreach function
    wp_reset_postdata();
  }

}
add_shortcode( 'elsm_wp_query_demo', 'elsm_wp_query_simple' );







function videos_query($args) {
	
	$videos_query = [];
  
    $the_query = get_posts('post_type=videos');
  
    foreach ( $the_query as $post ) : setup_postdata( $post );
    $videos_query[] = array(
      'id'       => get_post_meta(get_the_ID(), 'idkey', true ),
      'field1'   => get_post_meta(get_the_ID(), 'field1key', true ),
      'title'    => get_the_title($post->ID)
    );
    endforeach;
    wp_reset_postdata();
    return $videos_query;
}


function wpc_elementor_shortcode( $atts ) {
	
  // $query = new WP_Query( array( 'author' => 1 ) );
    
  // 	echo "<h3>Query Results Count: " . count($query) . "</h3>";
  
  // 	$post_types = get_post_types();
  // 	echo "<pre>";
  // 	var_dump($post_types);
  // 	echo "</pre>";
  // 	
  
  $videos_results = videos_query();
    
  $vidCount = count($videos_results);
	
	echo "<h3>Video Count: $vidCount</h3>";
  
}
add_shortcode( 'my_elementor_php_output', 'wpc_elementor_shortcode');