
<?php
/**
 * Wellora theme setup.
 *
 * Registers theme features and WordPress integrations.
 *
 * @package Wellora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure theme support and localization.
 *
 * @return void
 */
function wellora_setup(): void {

	// Enable theme translations.
	load_theme_textdomain(
		'wellora',
		get_theme_file_path( '/languages' )
	);

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable featured images.
	add_theme_support( 'post-thumbnails' );

	// Enable responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enable WordPress block styles.
	add_theme_support( 'wp-block-styles' );

	// Enable wide and full-width block alignments.
	add_theme_support( 'align-wide' );

	// Enable automatic feed links.
	add_theme_support( 'automatic-feed-links' );

	// Enable HTML5 markup.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	// Enable custom logo support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'wellora_setup' );
