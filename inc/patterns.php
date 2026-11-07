
<?php
/**
 * Wellora block pattern categories.
 *
 * @package Wellora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom block pattern categories.
 *
 * @return void
 */
function wellora_register_pattern_categories(): void {

	register_block_pattern_category(
		'wellora',
		array(
			'label' => __( 'Wellora', 'wellora' ),
		)
	);

	register_block_pattern_category(
		'wellora-sections',
		array(
			'label' => __( 'Wellora Sections', 'wellora' ),
		)
	);
}
add_action( 'init', 'wellora_register_pattern_categories' );
