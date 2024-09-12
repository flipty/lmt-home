<?php

add_action('init', 'lmthome_create_post_types');

function lmthome_create_post_types() {

  // Set up Projects
  $projectLabels = array(
    'name' => 'Projects',
    'singular_name' => 'Project',
    'add_new' => 'Add New Project',
    'add_new_item' => 'Add New Project',
    'edit_item' => 'Edit Project',
    'new_item' => 'New Project',
    'all_items' => 'All Projects',
    'view_item' => 'View Project',
    'search_items' => 'Search Projects',
    'not_found' =>  'No Projects Found',
    'not_found_in_trash' => 'No Projects found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Projects'
  );

  register_post_type('project', array(
    'labels' => $projectLabels,
    'has_archive' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-smiley',
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'project')
    )
  );

}

?>
