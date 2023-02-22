<?php

// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'deelko_jubayer' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'deelko_jubayer' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'deelko_jubayer' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'deelko_jubayer' ),
		'archives' => __( 'Portfolio Archives', 'deelko_jubayer' ),
		'attributes' => __( 'Portfolio Attributes', 'deelko_jubayer' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'deelko_jubayer' ),
		'all_items' => __( 'All Portfolios', 'deelko_jubayer' ),
		'add_new_item' => __( 'Add New Portfolio', 'deelko_jubayer' ),
		'add_new' => __( 'Add New', 'deelko_jubayer' ),
		'new_item' => __( 'New Portfolio', 'deelko_jubayer' ),
		'edit_item' => __( 'Edit Portfolio', 'deelko_jubayer' ),
		'update_item' => __( 'Update Portfolio', 'deelko_jubayer' ),
		'view_item' => __( 'View Portfolio', 'deelko_jubayer' ),
		'view_items' => __( 'View Portfolios', 'deelko_jubayer' ),
		'search_items' => __( 'Search Portfolio', 'deelko_jubayer' ),
		'not_found' => __( 'Not found', 'deelko_jubayer' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'deelko_jubayer' ),
		'featured_image' => __( 'Featured Image', 'deelko_jubayer' ),
		'set_featured_image' => __( 'Set featured image', 'deelko_jubayer' ),
		'remove_featured_image' => __( 'Remove featured image', 'deelko_jubayer' ),
		'use_featured_image' => __( 'Use as featured image', 'deelko_jubayer' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'deelko_jubayer' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'deelko_jubayer' ),
		'items_list' => __( 'Portfolios list', 'deelko_jubayer' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'deelko_jubayer' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'deelko_jubayer' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'deelko_jubayer' ),
		'description' => __( '', 'deelko_jubayer' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-collapse',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );