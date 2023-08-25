<?php
/**
 * Zen WP Boilerplate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define theme version.
if ( ! defined( 'ZEN_WP_BOILERPLATE' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ZEN_WP_BOILERPLATE', '1.0.0' );
}

// Define constants for this theme.
require get_template_directory() . '/inc/constants.php';

// Helper function file include.
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'helper-functions.php';

// Include files related to WordPress setups and
// custom WordPress related functions.
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'theme-setup.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'content-width.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'enqueue-scripts.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'template-tags.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'template-functions.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'custom-header.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'widgets.php';
require ZEN_WP_BOILERPLATE_INCLUDES_DIR . 'customizer.php';

// Include the required theme hook files.
require ZEN_WP_BOILERPLATE_HOOKS_DIR . 'hooks.php';
require ZEN_WP_BOILERPLATE_HOOKS_DIR . 'header.php';
require ZEN_WP_BOILERPLATE_HOOKS_DIR . 'content.php';
require ZEN_WP_BOILERPLATE_HOOKS_DIR . 'footer.php';
