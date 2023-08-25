<?php
/**
 * Zen WP Boilerplate Theme Hooks for the footer parts.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_content_wrapper_ends' ) ) :

	/**
	 * Content ends.
	 */
	function zen_wp_boilerplate_content_wrapper_ends() {
		?>
		</div><!-- #content -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_footer_starts' ) ) :

	/**
	 * Footer starts.
	 */
	function zen_wp_boilerplate_footer_starts() {
		?>
		<footer id="colophon" class="site-footer">
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_footer_ends' ) ) :

	/**
	 * Footer ends.
	 */
	function zen_wp_boilerplate_footer_ends() {
		?>
		</footer><!-- #colophon -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_page_ends' ) ) :

	/**
	 * Page ends.
	 */
	function zen_wp_boilerplate_page_ends() {
		?>
		</div><!-- #page -->
		<?php
	}

endif;
