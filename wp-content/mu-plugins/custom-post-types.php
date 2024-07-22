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

// add_action( 'init', 'create_product_category_hierarchical_taxonomy', 0 );
//
// function create_product_category_hierarchical_taxonomy() {
//
//   $productCategoryLabels = array(
//     'name' => _x( 'Product Category', 'taxonomy general name' ),
//     'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Product Categories' ),
//     'all_items' => __( 'All Product Categories' ),
//     'parent_item' => __( 'Parent Product Category' ),
//     'parent_item_colon' => __( 'Parent Product Category:' ),
//     'edit_item' => __( 'Edit Product Category' ),
//     'update_item' => __( 'Update Product Category' ),
//     'add_new_item' => __( 'Add New Product Category' ),
//     'new_item_name' => __( 'New Product Category Name' ),
//     'menu_name' => __( 'Product Categories' ),
//   );
//
//   register_taxonomy('product_category',array('post'), array(
//     'hierarchical' => true,
//     'labels' => $productCategoryLabels,
//     'show_ui' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'product-category' ),
//   ));
//
// }

add_action( 'init', 'create_products_hierarchical_taxonomy', 0 );

function create_products_hierarchical_taxonomy() {

  // $productsLabels = array(
  //   'name' => _x( 'Products', 'taxonomy general name' ),
  //   'singular_name' => _x( 'Product', 'taxonomy singular name' ),
  //   'search_items' =>  __( 'Search Products' ),
  //   'all_items' => __( 'All Products' ),
  //   'parent_item' => __( 'Parent Product' ),
  //   'parent_item_colon' => __( 'Parent Product:' ),
  //   'edit_item' => __( 'Edit Product' ),
  //   'update_item' => __( 'Update Product' ),
  //   'add_new_item' => __( 'Add New Product' ),
  //   'new_item_name' => __( 'New Product Name' ),
  //   'menu_name' => __( 'Products' ),
  // );

  // register_taxonomy('products',array('post'), array(
  //   'hierarchical' => true,
  //   'labels' => $productsLabels,
  //   'show_ui' => true,
  //   'show_admin_column' => true,
  //   'query_var' => true,
  //   'rewrite' => array( 'slug' => 'product' ),
  // ));

  // $segmentLabels = array(
  //   'name' => _x( 'Business Segments', 'taxonomy general name' ),
  //   'singular_name' => _x( 'Business Segment', 'taxonomy singular name' ),
  //   'search_items' =>  __( 'Search Business Segments' ),
  //   'all_items' => __( 'All Business Segments' ),
  //   'parent_item' => __( 'Parent Business Segment' ),
  //   'parent_item_colon' => __( 'Parent Business Segment:' ),
  //   'edit_item' => __( 'Edit Business Segment' ),
  //   'update_item' => __( 'Update Business Segment' ),
  //   'add_new_item' => __( 'Add New Business Segment' ),
  //   'new_item_name' => __( 'New Business Segment Name' ),
  //   'menu_name' => __( 'Business Segments' ),
  // );
  //
  // register_taxonomy('segment',array('post'), array(
  //   'hierarchical' => true,
  //   'labels' => $segmentLabels,
  //   'show_ui' => true,
  //   'show_admin_column' => true,
  //   'query_var' => true,
  //   'rewrite' => array( 'slug' => 'segment' ),
  // ));

}

?>
