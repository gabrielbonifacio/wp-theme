<?php
/**
 * Setup content width for this theme
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_content_width' ) ) :

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width
	 */
	function zen_wp_boilerplate_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'zen_wp_boilerplate_content_width', 640 );
	}

endif;

add_action( 'after_setup_theme', 'zen_wp_boilerplate_content_width', 0 );
