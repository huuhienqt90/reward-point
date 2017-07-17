<?php
/**
 * Created by PhpStorm.
 * User: LuckyStar
 * Date: 5/19/14
 * Time: 3:42 PM
 */

class RWP_CPT {
    function __construct(){
        add_action( 'init', array($this, 'register_post_types' ) );
    }
    function register_post_types(){
        register_post_type( "behavior",
            apply_filters( 'rewardpoint_register_post_type_behavior',
                array(
                    'labels' => array(
                        'name' 					=> __( 'Behaviors', 'rewardpoint' ),
                        'singular_name' 		=> __( 'Behavior', 'rewardpoint' ),
                        'menu_name'				=> _x( 'Behaviors', 'Admin menu name', 'rewardpoint' ),
                        'add_new' 				=> __( 'Add Behavior', 'rewardpoint' ),
                        'add_new_item' 			=> __( 'Add New Behavior', 'rewardpoint' ),
                        'edit' 					=> __( 'Edit', 'woocommerce' ),
                        'edit_item' 			=> __( 'Edit Behavior', 'rewardpoint' ),
                        'new_item' 				=> __( 'New Behavior', 'rewardpoint' ),
                        'view' 					=> __( 'View Behavior', 'rewardpoint' ),
                        'view_item' 			=> __( 'View Behavior', 'rewardpoint' ),
                        'search_items' 			=> __( 'Search Behaviors', 'rewardpoint' ),
                        'not_found' 			=> __( 'No Behaviors found', 'rewardpoint' ),
                        'not_found_in_trash' 	=> __( 'No Behaviors found in trash', 'rewardpoint' ),
                        'parent' 				=> __( 'Parent Behavior', 'rewardpoint' )
                    ),
                    'description' 			=> __( 'This is where you can add new behaviors to your store.', 'rewardpoint' ),
                    'public' 				=> false,
                    'show_ui' 				=> true,
                    'capability_type' 		=> 'behavior',
                    'map_meta_cap'			=> true,
                    'publicly_queryable' 	=> true,
                    'exclude_from_search' 	=> false,
                    'hierarchical' 			=> false, // Hierarchical causes memory issues - WP loads all records!
                    'query_var' 			=> true,
                    'supports' 				=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'custom-fields', 'page-attributes' ),
                    'show_in_nav_menus' 	=> true
                )
            )
        );
    }
}
new RWP_CPT();