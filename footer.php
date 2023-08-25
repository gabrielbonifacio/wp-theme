<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
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

/**
 * Functions hooked into zen_wp_boilerplate_do_before_content_starts action.
 *
 * @hooked zen_wp_boilerplate_content_wrapper_ends - 10
 */
do_action( 'zen_wp_boilerplate_do_after_content_ends' );

/**
 * Functions hooked into zen_wp_boilerplate_do_before_footer action.
 *
 * @hooked zen_wp_boilerplate_footer_starts - 10
 */
do_action( 'zen_wp_boilerplate_do_before_footer' );

/**
 * Functions hooked into zen_wp_boilerplate_do_footer action.
 *
 * @hooked zen_wp_boilerplate_site_info - 10
 */
do_action( 'zen_wp_boilerplate_do_footer' );

/**
 * Functions hooked into zen_wp_boilerplate_do_after_footer action.
 *
 * @hooked zen_wp_boilerplate_footer_ends - 10
 */
do_action( 'zen_wp_boilerplate_do_after_footer' );

/**
 * Functions hooked into zen_wp_boilerplate_do_after action.
 *
 * @hooked zen_wp_boilerplate_page_ends - 10
 */
do_action( 'zen_wp_boilerplate_do_after' );

wp_footer();

/**
 * Hook: zen_wp_boilerplate_do_body_close.
 */
do_action( 'zen_wp_boilerplate_do_body_close' );
?>

</body>
</html>
