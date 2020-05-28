<?php
/**
 * Plugin Name:     Tsblock
 * Description:     An example block written in Typescript.
 * Version:         0.1.0
 * Author:          mkaz
 * Author URI:      https://mkaz.blog/
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     tsblock
 *
 * @package         tsblock
 */

add_action( 'init', function() {
	$dir = dirname( __FILE__ );

	$asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

	wp_register_script(
		'mkaz-tsblock-editor',
		plugins_url( 'build/index.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);

	register_block_type( 'mkaz/tsblock', array(
		'editor_script' => 'mkaz-tsblock-editor',
	) );
} );
