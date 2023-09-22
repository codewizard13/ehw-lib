<?php

// ################## Knowledge Base CPT ######################

// Register Custom Post Type
function create_kb() {

	$labels = array(
		'name'                  => _x( 'Docs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Doc', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Docs', 'text_domain' ),
		'name_admin_bar'        => __( 'Docs', 'text_domain' ),
		'archives'              => __( 'Docs', 'text_domain' ),
		'attributes'            => __( 'Docs', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Doc:', 'text_domain' ),
		'all_items'             => __( 'All Docs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Doc', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Doc', 'text_domain' ),
		'edit_item'             => __( 'Edit Doc', 'text_domain' ),
		'update_item'           => __( 'Update Doc', 'text_domain' ),
		'view_item'             => __( 'View Doc', 'text_domain' ),
		'view_items'            => __( 'View Docs', 'text_domain' ),
		'search_items'          => __( 'Search Doc', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into doc', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this doc', 'text_domain' ),
		'items_list'            => __( 'Docs list', 'text_domain' ),
		'items_list_navigation' => __( 'Docs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter docs list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'docs',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Doc', 'text_domain' ),
		'description'           => __( 'This is your knowledgebase custom post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'doc_category', 'doc_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'post_kb', $args );

}
add_action( 'init', 'create_kb', 0 );


// ################## Knowledge Base TAXONOMIES ######################


