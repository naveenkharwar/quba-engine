<?php
function portfolio_section()
{
    register_post_type(
        'portfolio',
        array(
            'labels' => array(
                'name' => _x('Portfolio', 'Post Type General Name', 'quba'),
                'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'quba'),
                'add_new' => __('Add New Project', 'quba'),
                'add_new_item' => __('Add New Project', 'quba'),
                'edit' => __('Edit', 'quba'),
                'edit_item' => __('Edit Project', 'quba'),
                'new_item' => __('New Project', 'quba'),
                'view' => __('View', 'quba'),
                'view_item' => __('View Project', 'quba'),
                'search_items' => __('Search Projects', 'quba'),
                'not_found' => __('No Projects found', 'quba'),
                'not_found_in_trash' => __('No Projects found in Trash', 'quba'),
                'parent' => __('Parent Projects', 'quba')
            ),

            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-portfolio',
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'has_archive' => false,
        )
    );
}
add_action('init', 'portfolio_section');
