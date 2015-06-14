<?php

/*
Plugin Name: Folks We've Worked With custom post type
Description: it's in the name, pretty much
*/


// Register Custom Post Type
function cr_folks_posttype() {

	$labels = array(
		'name'                => 'Folks',
		'singular_name'       => 'Folk',
		'menu_name'           => 'Folks',
		'name_admin_bar'      => 'Folks',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Folks',
		'add_new_item'        => 'Add New Folk',
		'add_new'             => 'Add New',
		'new_item'            => 'New Folk',
		'edit_item'           => 'Edit Folk',
		'update_item'         => 'Update Folk',
		'view_item'           => 'View Folk',
		'search_items'        => 'Search Folks',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'cr_folk',
		'description'         => 'Folks We\'ve Worked With gallery items',
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'cr_folk', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cr_folks_posttype', 0 );




?>