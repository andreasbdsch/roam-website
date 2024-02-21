<?php
/**
 * Plugin Name:       Roammap
 * Description:       A simple, non-interactive block to display the leaflet map of the location of roam
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       roammap
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_roammap_block_init() {
	register_block_type( __DIR__ . '/build' );
	wp_enqueue_style(
		'leaflet-style',
		plugins_url( 'leaflet/leaflet.css', __FILE__ )
	);
	wp_enqueue_script(
		'leaflet-script',
		plugins_url( 'leaflet/leaflet.js', __FILE__ )
	);
}
add_action( 'init', 'create_block_roammap_block_init' );

function set_roammap() {
	wp_enqueue_script(
		'roammap-script',
		plugins_url( 'js/roammap.js', __FILE__ )
	);
}
add_action( 'wp_enqueue_scripts', 'set_roammap' );