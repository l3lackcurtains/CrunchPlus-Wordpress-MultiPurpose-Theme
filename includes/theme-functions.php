<?php
// Admin page styling
function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );



add_action( 'init', array('tif_register','reg_listing') );
add_action( 'init', array('tif_register','listing_taxonomies') );


class tif_register{
	// custom Post type registration
	public function reg_listing() {
		$labels = array(
			'name'               => _x( 'Listings', 'Listings', TIF_TD ),
			'singular_name'      => _x( 'Listing', 'listing', TIF_TD ),
			'menu_name'          => _x( 'Listing', 'admin menu', TIF_TD ),
			'name_admin_bar'     => _x( 'Listing', 'add new on admin bar', TIF_TD ),
			'add_new'            => _x( 'Add New', 'Listing', TIF_TD ),
			'add_new_item'       => __( 'Add New Listing', TIF_TD ),
			'new_item'           => __( 'New Listing', TIF_TD ),
			'edit_item'          => __( 'Edit Listing', TIF_TD ),
			'view_item'          => __( 'View Listing', TIF_TD ),
			'all_items'          => __( 'All Listings', TIF_TD ),
			'search_items'       => __( 'Search Listings', TIF_TD ),
			'parent_item_colon'  => __( 'Parent Listings:', TIF_TD ),
			'not_found'          => __( 'No Listings found.', TIF_TD ),
			'not_found_in_trash' => __( 'No Listings found in Trash.', TIF_TD )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'description'         => 'description',
			'taxonomies'          => array(),
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'   => true,
			'menu_icon'          => 'dashicons-index-card',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'listings' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 15,
			'supports'            => array('title', 'editor', 'thumbnail','custom-fields', 'post-formats'
			)
		);

		register_post_type( 'listings', $args );
	}

function listing_taxonomies() {

	$labels = array(
		'name'					=> _x( 'Listing Categories', 'Taxonomy Listing Categories', 'text-domain' ),
		'singular_name'			=> _x( 'Listing Category', 'Taxonomy Listing Category', 'text-domain' ),
		'search_items'			=> __( 'Search Listing Categories', 'text-domain' ),
		'popular_items'			=> __( 'Popular Listing Categories', 'text-domain' ),
		'all_items'				=> __( 'All Listing Categories', 'text-domain' ),
		'parent_item'			=> __( 'Parent Listing Category', 'text-domain' ),
		'parent_item_colon'		=> __( 'Parent Listing Category', 'text-domain' ),
		'edit_item'				=> __( 'Edit Listing Category', 'text-domain' ),
		'update_item'			=> __( 'Update Listing Category', 'text-domain' ),
		'add_new_item'			=> __( 'Add New Listing Category', 'text-domain' ),
		'new_item_name'			=> __( 'New Listing Category Name', 'text-domain' ),
		'add_or_remove_items'	=> __( 'Add or remove Listing Categories', 'text-domain' ),
		'choose_from_most_used'	=> __( 'Choose from most used text-domain', 'text-domain' ),
		'menu_name'				=> __( 'Categories', 'text-domain' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'taxonomy-slug', array( 'listings' ), $args );
}

}

?>