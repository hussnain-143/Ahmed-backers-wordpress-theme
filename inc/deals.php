<?php
// Register Custom Post Type Deal
function create_deal_cpt() {

	$labels = array(
		'name' => _x( 'Deals', 'Post Type General Name', 'ahmed-backers' ),
		'singular_name' => _x( 'Deal', 'Post Type Singular Name', 'ahmed-backers' ),
		'menu_name' => _x( 'Deals', 'Admin Menu text', 'ahmed-backers' ),
		'name_admin_bar' => _x( 'Deal', 'Add New on Toolbar', 'ahmed-backers' ),
		'archives' => __( 'Deal Archives', 'ahmed-backers' ),
		'attributes' => __( 'Deal Attributes', 'ahmed-backers' ),
		'parent_item_colon' => __( 'Parent Deal:', 'ahmed-backers' ),
		'all_items' => __( 'All Deals', 'ahmed-backers' ),
		'add_new_item' => __( 'Add New Deal', 'ahmed-backers' ),
		'add_new' => __( 'Add New', 'ahmed-backers' ),
		'new_item' => __( 'New Deal', 'ahmed-backers' ),
		'edit_item' => __( 'Edit Deal', 'ahmed-backers' ),
		'update_item' => __( 'Update Deal', 'ahmed-backers' ),
		'view_item' => __( 'View Deal', 'ahmed-backers' ),
		'view_items' => __( 'View Deals', 'ahmed-backers' ),
		'search_items' => __( 'Search Deal', 'ahmed-backers' ),
		'not_found' => __( 'Not found', 'ahmed-backers' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'ahmed-backers' ),
		'featured_image' => __( 'Featured Image', 'ahmed-backers' ),
		'set_featured_image' => __( 'Set featured image', 'ahmed-backers' ),
		'remove_featured_image' => __( 'Remove featured image', 'ahmed-backers' ),
		'use_featured_image' => __( 'Use as featured image', 'ahmed-backers' ),
		'insert_into_item' => __( 'Insert into Deal', 'ahmed-backers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Deal', 'ahmed-backers' ),
		'items_list' => __( 'Deals list', 'ahmed-backers' ),
		'items_list_navigation' => __( 'Deals list navigation', 'ahmed-backers' ),
		'filter_items_list' => __( 'Filter Deals list', 'ahmed-backers' ),
	);
	$args = array(
		'label' => __( 'Deal', 'ahmed-backers' ),
		'description' => __( 'show all the deals ', 'ahmed-backers' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'deal', $args );

}
add_action( 'init', 'create_deal_cpt', 0 );

?>