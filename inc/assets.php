
<?php
/**
 * Wellora asset management.
 *
 * Handles frontend stylesheet and JavaScript loading.
 *
 * @package Wellora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme frontend assets.
 *
 * Assets are only loaded when their files exist.
 *
 * @return void
 */
function wellora_enqueue_assets(): void {

	$css_path = get_theme_file_path( '/assets/css/main.css' );

	if ( is_readable( $css_path ) ) {

		wp_enqueue_style(
			'wellora-main',
			get_theme_file_uri( '/assets/css/main.css' ),
			array(),
			(string) filemtime( $css_path )
		);
	}

	$js_path = get_theme_file_path( '/assets/js/main.js' );

	if ( is_readable( $js_path ) ) {

		wp_enqueue_script(
			'wellora-main',
			get_theme_file_uri( '/assets/js/main.js' ),
			array(),
			(string) filemtime( $js_path ),
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'wellora_enqueue_assets' );
