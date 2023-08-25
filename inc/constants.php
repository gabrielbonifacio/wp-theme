<?php
/**
 * Define constants for this theme.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define constants related to directory locations.
 */
define( 'ZEN_WP_BOILERPLATE_DIR', trailingslashit( get_template_directory() ) );
define( 'ZEN_WP_BOILERPLATE_INCLUDES_DIR', trailingslashit( ZEN_WP_BOILERPLATE_DIR . 'inc' ) );
define( 'ZEN_WP_BOILERPLATE_HOOKS_DIR', trailingslashit( ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'hooks' ) );

/**
 * Define constants related to url locations.
 */
define( 'ZEN_WP_BOILERPLATE_URL', trailingslashit( get_template_directory_uri() ) );
define( 'ZEN_WP_BOILERPLATE_ASSETS_URL', trailingslashit( ZEN_WP_BOILERPLATE_URL . 'assets' ) );
define( 'ZEN_WP_BOILERPLATE_CSS_URL', trailingslashit( ZEN_WP_BOILERPLATE_ASSETS_URL . 'css' ) );
define( 'ZEN_WP_BOILERPLATE_JS_URL', trailingslashit( ZEN_WP_BOILERPLATE_ASSETS_URL . 'js' ) );
define( 'ZEN_WP_BOILERPLATE_SVGS_URL', trailingslashit( ZEN_WP_BOILERPLATE_ASSETS_URL . 'svgs' ) );
