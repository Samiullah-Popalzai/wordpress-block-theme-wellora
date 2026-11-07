<?php
/**
 * Wellora theme bootstrap.
 *
 * Loads the theme's modular PHP functionality.
 *
 * @package Wellora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load theme functionality modules.
 */
require_once get_theme_file_path( '/inc/setup.php' );
require_once get_theme_file_path( '/inc/assets.php' );
require_once get_theme_file_path( '/inc/patterns.php' );
