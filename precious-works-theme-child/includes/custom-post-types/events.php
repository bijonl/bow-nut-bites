<?php
/**
 * Events Custom Post Type
 *
 * This custom post type adds support for Events. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_events() {
    $labels = apply_filters( 'events_post_type_labels', array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'menu_name'          => 'Events',
        'add_new'            => 'Add New Event',
        'add_new_item'       => 'Add Event',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Event',
        'new_item'           => 'New Event',
        'view'               => 'View Event',
        'view_item'          => 'View Event',
        'search_items'       => 'Search Events',
        'not_found'          => 'No Event',
        'not_found_in_trash' => 'No Events Found in Trash',
        'parent'             => 'Parent Events',
    ));

    $args = apply_filters( 'event_post_type_args', array(
        'label'               => 'event',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-calendar-alt',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'events', $args );
}
add_action( 'init', 'register_custom_post_type_events' );


// Run once for user permissions

add_action( 'admin_init', 'add_event_caps');
function add_event_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_event' );
        $role->add_cap( 'read_event' );
        $role->add_cap( 'delete_event' );
        $role->add_cap( 'edit_event' );
        $role->add_cap( 'edit_others_event' );
        $role->add_cap( 'publish_event' );
        $role->add_cap( 'read_private_event' );
    }
}