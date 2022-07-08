<?php

function register_angdo_courses_catalog_post(){

/**
	 * Post Type: Courses.
	 */

	$labels = [
		"name" => __( "Courses", "custom-post-type-ui" ),
		"singular_name" => __( "Course", "custom-post-type-ui" ),
		"menu_name" => __( "Andgo Courses Posts", "custom-post-type-ui" ),
		"all_items" => __( "All Courses Posts", "custom-post-type-ui" ),
		"add_new" => __( "Add New Course Post", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Course Post", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Course", "custom-post-type-ui" ),
		"new_item" => __( "New Course Post", "custom-post-type-ui" ),
		"view_item" => __( "View Course Post", "custom-post-type-ui" ),
		"view_items" => __( "View Courses Posts", "custom-post-type-ui" ),
		"search_items" => __( "Search Courses Post", "custom-post-type-ui" ),
		"not_found" => __( "No Courses Found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Courses Found in trash", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for courses post", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for courses post", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for courses post", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as courses featured image", "custom-post-type-ui" ),
		"archives" => __( "Courses archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into course post", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Uploaded to course post", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter course list", "custom-post-type-ui" ),
		"items_list" => __( "Courses list", "custom-post-type-ui" ),
		"attributes" => __( "Courses attributes", "custom-post-type-ui" ),
		"item_published" => __( "Course post published.", "custom-post-type-ui" ),
		"item_published_privately" => __( "Course post published privately", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Course post reverted to draft", "custom-post-type-ui" ),
		"item_scheduled" => __( "Course scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Course post updated", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Courses", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "A custom plugin that supports video , images , text and other content from other plugins ",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "courses_post_rest_api",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post","page",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "courses_post", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => false,
	];


//important id here
register_post_type( 'courses_post', $args );




};
add_action( 'init', 'register_angdo_courses_catalog_post');








function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('courses_post');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'courses'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}

add_filter('pre_get_posts', 'query_post_type');



