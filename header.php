<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php
	/**
	 * Functions hooked into zen_wp_boilerplate_do_head action.
	 *
	 * @hooked zen_wp_boilerplate_header_meta_tags - 10
	 */
	do_action( 'zen_wp_boilerplate_do_head' );

	wp_head();
	?>
</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();

/**
 * Hook: zen_wp_boilerplate_do_body_open.
 */
do_action( 'zen_wp_boilerplate_do_body_open' );

/**
 * Functions hooked into zen_wp_boilerplate_do_before action.
 *
 * @hooked zen_wp_boilerplate_page_starts - 10
 * @hooked zen_wp_boilerplate_skip_content_link - 15
 */
do_action( 'zen_wp_boilerplate_do_before' );

/**
 * Functions hooked into zen_wp_boilerplate_do_before_header action.
 *
 * @hooked zen_wp_boilerplate_header_starts - 10
 */
do_action( 'zen_wp_boilerplate_do_before_header' );

/**
 * Functions hooked into zen_wp_boilerplate_do_header action.
 *
 * @hooked zen_wp_boilerplate_site_branding - 10
 * @hooked zen_wp_boilerplate_site_navigation - 15
 */
do_action( 'zen_wp_boilerplate_do_header' );

/**
 * Functions hooked into zen_wp_boilerplate_do_after_header action.
 *
 * @hooked zen_wp_boilerplate_header_ends - 10
 */
do_action( 'zen_wp_boilerplate_do_after_header' );

/**
 * Functions hooked into zen_wp_boilerplate_do_before_content_starts action.
 *
 * @hooked zen_wp_boilerplate_content_wrapper_starts - 10
 */
do_action( 'zen_wp_boilerplate_do_before_content_starts' );
