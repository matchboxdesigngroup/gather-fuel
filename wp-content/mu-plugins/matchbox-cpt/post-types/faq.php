<?php
/**
 * Register custom post type for FAQs.
 * 
 * @since 1.0.0
 * @return void
 */
function matchbox_cpt_register_faq_post_type() {

  /**
   * Set the labels for FAQs post type.
   * 
   * @since 1.0.0
   */
  $labels = array(
    'name'                     => __( 'FAQs', 'matchbox' ),
    'singular_name'            => __( 'FAQ', 'matchbox' ),
    'add_new'                  => __( 'Add New', 'matchbox' ),
    'add_new_item'             => __( 'Add New FAQ', 'matchbox' ),
    'edit_item'                => __( 'Edit FAQ', 'matchbox' ),
    'new_item'                 => __( 'New FAQ', 'matchbox' ),
    'view_item'                => __( 'View FAQ', 'matchbox' ),
    'view_items'               => __( 'View FAQs', 'matchbox' ),
    'search_items'             => __( 'Search FAQs', 'matchbox' ),
    'not_found'                => __( 'No FAQs found.', 'matchbox' ),
    'not_found_in_trash'       => __( 'No FAQs found in Trash.', 'matchbox' ),
    'parent_item_colon'        => __( 'Parent FAQs:', 'matchbox' ),
    'all_items'                => __( 'All FAQs', 'matchbox' ),
    'archives'                 => __( 'FAQ Archives', 'matchbox' ),
    'attributes'               => __( 'FAQ Attributes', 'matchbox' ),
    'insert_into_item'         => __( 'Insert into FAQ', 'matchbox' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this FAQ', 'matchbox' ),
    'featured_image'           => __( 'Featured Image', 'matchbox' ),
    'set_featured_image'       => __( 'Set featured image', 'matchbox' ),
    'remove_featured_image'    => __( 'Remove featured image', 'matchbox' ),
    'use_featured_image'       => __( 'Use as featured image', 'matchbox' ),
    'menu_name'                => __( 'FAQs', 'matchbox' ),
    'filter_items_list'         => __( 'Filter FAQ list', 'matchbox' ),
    'filter_by_date'            => __( 'Filter by date', 'matchbox' ),
    'items_list_navigation'    => __( 'FAQs list navigation', 'matchbox' ),
    'items_list'               => __( 'FAQs list', 'matchbox' ),
    'item_published'           => __( 'FAQ published.', 'matchbox' ),
    'item_published_privately' => __( 'FAQ published privately.', 'matchbox' ),
    'item_reverted_to_draft'   => __( 'FAQ reverted to draft.', 'matchbox' ),
    'item_scheduled'           => __( 'FAQ scheduled.', 'matchbox' ),
    'item_updated'             => __( 'FAQ updated.', 'matchbox' ),
    'item_link'                => __( 'FAQ Link', 'matchbox' ),
    'item_link_description'    => __( 'A link to an FAQ.', 'matchbox' ),
  );

  /**
   * Set the arguments for FAQs post type.
   * 
   * @since 1.0.0
   */
  $args = array(
    'labels'                => $labels,
    'description'           => __( 'Organize and manage frequently asked questions', 'matchbox' ),
    'public'                => false,
    'hierarchical'          => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'show_in_nav_menus'     => false,
    'show_in_admin_bar'     => false,
    'show_in_rest'          => true,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-help',
    'capability_type'       => 'post',
    'capabilities'          => array(),
    'supports'              => array( 'title', 'editor', 'revisions' ),
    'taxonomies'            => array(),
    'has_archive'           => false,
    'rewrite'               => array( 'slug' => 'faqs' ),
    'query_var'             => true,
    'can_export'            => true,
    'delete_with_user'      => false,
    'template'              => array(),
    'template_lock'         => false,
  );

  /**
   * Registers the custom post type.
   * @param string $post_type Name of the post type. Max length of 20 characters. No capital letters or spaces.
   * @param array $args Array of arguments for registering a custom post type.
   * 
   * @since 1.0.0
   * @return void
   */
  register_post_type( 'matchbox_faq', $args );
}
add_action( 'init', 'matchbox_cpt_register_faq_post_type' );

/**
 * Register the Categories taxonomy for the FAQs post type.
 * 
 * @since 1.0.0
 * @return void
 */
function matchbox_cpt_register_faq_taxonomy() {

  /**
   * Set the labels for FAQs taxonomy.
   * 
   * @since 1.0.0
   */
  $labels = array(
    'name'                       => __( 'Categories', 'matchbox' ),
    'singular_name'              => __( 'Category', 'matchbox' ),
    'search_items'               => __( 'Search Categories', 'matchbox' ),
    'popular_items'              => __( 'Popular Categories', 'matchbox' ),
    'all_items'                  => __( 'All Categories', 'matchbox' ),
    'parent_item'                => __( 'Parent Category', 'matchbox' ),
    'parent_item_colon'          => __( 'Parent Category:', 'matchbox' ),
    'edit_item'                  => __( 'Edit Category', 'matchbox' ),
    'update_item'                => __( 'Update Category', 'matchbox' ),
    'add_new_item'               => __( 'Add New Category', 'matchbox' ),
    'new_item_name'              => __( 'New Category Name', 'matchbox' ),
    'separate_items_with_commas' => __( 'Separate categories with commas', 'matchbox' ),
    'add_or_remove_items'        => __( 'Add or remove categories', 'matchbox' ),
    'choose_from_most_used'      => __( 'Choose from the most used categories', 'matchbox' ),
    'not_found'                  => __( 'No categories found.', 'matchbox' ),
    'menu_name'                  => __( 'Categories', 'matchbox' ),
  );

  /**
   * Set the arguments for FAQs taxonomy.
   * 
   * @since 1.0.0
   */
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'show_in_rest'               => true,
    'rewrite'                    => array( 'slug' => 'faq-categories' ),
  );

  /**
   * Registers the custom taxonomy for the "matchbox_faq" post type.
   * @param string $taxonomy Name of the custom taxonomy.
   * @param string|array $object_type Name of the custom post type or array of post types.
   * @param array $args Array of arguments for registering the custom taxonomy.
   * 
   * @since 1.0.0
   * @return void
*/
  register_taxonomy( 'matchbox_faq_category', 'matchbox_faq', $args );
}
add_action( 'init', 'matchbox_cpt_register_faq_taxonomy' );
