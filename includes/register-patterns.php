<?php

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	register_block_pattern(
		'real-estate/header-transparent',
		array(
			'title'      => esc_html__( 'Header Transparent', 'real-estate' ),
			'categories' => array( 'site-header' ),
			'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
				'real_estate_pattern_header_transparent',
				'<!-- wp:site-title /-->'
			) : '<!-- wp:site-title /-->',
		)
	);
}