<?php
/**
 * Enqueue styles and scripts.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_scripts' ) ) :

	/**
	 * Enqueue scripts and styles.
	 */
	function zen_wp_boilerplate_scripts() {

		// Enqueue the main CSS file.
		wp_enqueue_style(
			'zen-wp-boilerplate-style',
			ZEN_WP_BOILERPLATE_CSS_URL . 'zen-wp-boilerplate' . zen_wp_boilerplate_suffix() . '.css',
			array(),
			ZEN_WP_BOILERPLATE
		);

		// Load the RTL file if the site language is set to RTL language.
		wp_style_add_data(
			'zen-wp-boilerplate-style',
			'rtl',
			'replace'
		);

		// Enqueue the main JS file.
		wp_enqueue_script(
			'zen-wp-boilerplate-script',
			ZEN_WP_BOILERPLATE_JS_URL . 'zen-wp-boilerplate' . zen_wp_boilerplate_suffix() . '.js',
			array(),
			ZEN_WP_BOILERPLATE,
			true
		);

		// Enqueue the comment reply JS file, which is of WordPress itself.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Localize the script to pass the url of SVG Sprites.
		wp_localize_script(
			'zen-wp-boilerplate-script',
			'zenWPBoilerplateSVGSURI',
			array(
				'svg_assets_uri' => ZEN_WP_BOILERPLATE_SVGS_URL . 'svg-sprites.svg#',
			)
		);

	}

endif;

add_action( 'wp_enqueue_scripts', 'zen_wp_boilerplate_scripts' );
