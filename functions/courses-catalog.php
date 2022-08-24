<?php

function register_angdo_courses_catalog_post()
{

	/**
	 * Post Type: Courses.
	 */

	$labels = [
		"name" => __("Courses", "courses_post"),
		"singular_name" => __("Course", "courses_catalog_post_type"),
		"menu_name" => __("Andgo Courses Posts", "courses_catalog_post_type"),
		"all_items" => __("All Courses Posts", "courses_catalog_post_type"),
		"add_new" => __("Add New Course Post", "courses_catalog_post_type"),
		"add_new_item" => __("Add New Course Post", "courses_catalog_post_type"),
		"edit_item" => __("Edit Course", "courses_catalog_post_type"),
		"new_item" => __("New Course Post", "courses_catalog_post_type"),
		"view_item" => __("View Course Post", "courses_catalog_post_type"),
		"view_items" => __("View Courses Posts", "courses_catalog_post_type"),
		"search_items" => __("Search Courses Post", "courses_catalog_post_type"),
		"not_found" => __("No Courses Found", "courses_catalog_post_type"),
		"not_found_in_trash" => __("No Courses Found in trash", "courses_catalog_post_type"),
		"featured_image" => __("Featured image for courses post", "courses_catalog_post_type"),
		"set_featured_image" => __("Set featured image for courses post", "courses_catalog_post_type"),
		"remove_featured_image" => __("Remove featured image for courses post", "courses_catalog_post_type"),
		"use_featured_image" => __("Use as courses featured image", "courses_catalog_post_type"),
		"archives" => __("Courses archives", "courses_catalog_post_type"),
		"insert_into_item" => __("Insert into course post", "courses_catalog_post_type"),
		"uploaded_to_this_item" => __("Uploaded to course post", "courses_catalog_post_type"),
		"filter_items_list" => __("Filter course list", "courses_catalog_post_type"),
		"items_list" => __("Courses list", "courses_catalog_post_type"),
		"attributes" => __("Courses attributes", "courses_catalog_post_type"),
		"item_published" => __("Course post published.", "courses_catalog_post_type"),
		"item_published_privately" => __("Course post published privately", "courses_catalog_post_type"),
		"item_reverted_to_draft" => __("Course post reverted to draft", "courses_catalog_post_type"),
		"item_scheduled" => __("Course scheduled", "courses_catalog_post_type"),
		"item_updated" => __("Course post updated", "courses_catalog_post_type"),
	];

	$args = [
		"label" => __("Courses", "courses_post"),
		"labels" => $labels,
		"description" => "A custom plugin that supports video , images , text and other content from other plugins ",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"menu_icon" => "dashicons-book-alt",
		"supports" => ["title", "editor", "thumbnail", "block"],
		"capability_type" => "post", "page",

		"show_in_graphql" => false,
		//
		"taxonomies" => ["category", "post_tag"],
		"query_var" => true,
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		"rewrite" => ["slug" => "courses", "with_front" => true],

	];


	//important id here
	register_post_type('courses_post', $args);
};
add_action('init', 'register_angdo_courses_catalog_post');


/*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: 
*/

function wporg_register_taxonomy_course()
{
	$labels = array(
		'name'              => _x('Courses', 'courses_post'),
		'singular_name'     => _x('Course', 'course_post'),
		'search_items'      => __('Search Courses'),
		'all_items'         => __('All Courses'),
		'parent_item'       => __('Parent Course'),
		'parent_item_colon' => __('Parent Course:'),
		'edit_item'         => __('Edit Course'),
		'update_item'       => __('Update Course'),
		'add_new_item'      => __('Add New Course'),
		'new_item_name'     => __('New Course Name'),
		'menu_name'         => __('Course'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'course'],
	);
	register_taxonomy('course', ['post'], $args);
}
add_action('init', 'wporg_register_taxonomy_course');





function query_post_type($query)
{
	if (is_category()) {
		$post_type = get_query_var('courses_post');
		if ($post_type)
			$post_type = $post_type;
		else
			$post_type = array('nav_menu_item', 'post', 'courses'); // don't forget nav_menu_item to allow menus to work!
		$query->set('post_type', $post_type);
		return $query;
	}
}

add_filter('pre_get_posts', 'query_post_type');
