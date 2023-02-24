<?php
/**
 * Plugin Name: Matchbox CPT
 * Description: Registers custom post types and taxonomies for Matchbox projects.
 * Version: 1.0.0
 * Author: Matchbox
 * Author URI: https://github.com/matchboxdesigngroup
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Registers custom post types by including PHP files located in the `post-types` directory of the plugin.
 *
 * @since 1.0.0
 */
function matchbox_cpt_register_post_types() {
	/**
	 * The directory path where the post type PHP files are located.
	 *
	 * @var string $dir_path
	 */
	$dir_path = plugin_dir_path( __FILE__ ) . 'post-types/';

	/**
	 * An array of post type PHP files in the `post-types` directory.
	 *
	 * @var array $post_types
	 */
	$post_types = glob( $dir_path . '*.php' );

  /**
	 * An array of post types to exclude from registration.
	 *
	 * @var array $exclude_post_types
	 */
	$exclude_post_types = array( 'post', 'page' ); // Example array of post types to exclude. Change this as needed.

	// Loop through each post type PHP file and include it to register the custom post type.
	foreach ( $post_types as $post_type ) {
    $post_type_slug = basename( $post_type, '.php' );
		if ( in_array( $post_type_slug, $exclude_post_types ) ) {
			continue; // Skip this post type if it's in the exclude array.
		}
		include $post_type;
	}
}
add_action( 'init', 'matchbox_cpt_register_post_types' );
