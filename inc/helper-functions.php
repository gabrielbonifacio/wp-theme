<?php
/**
 * Helper functions for this theme.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_suffix' ) ) :

	/**
	 * Function to return the suffix value for assets loading according to the
	 * WordPress SCRIPT_DEBUG constant value set in wp-config.php file.
	 *
	 * @return string Empty if SCRIPT_DEBUG constant is set to true and
	 *                `.min` if SCRIPT_DEBUG constant is set to false.
	 */
	function zen_wp_boilerplate_suffix() {
		return ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_svg_icon' ) ) :

	/**
	 * Display or return the required SVG icon set via SVG Sprites.
	 *
	 * @param string $icon The SVG icon name.
	 * @param bool   $echo Whether to display the icon or return.
	 */
	function zen_wp_boilerplate_svg_icon( $icon, $echo = true ) {

		$output  = '<svg class="' . esc_attr( $icon ) . '">';
		$output .= '<use xlink:href="' . ZEN_WP_BOILERPLATE_SVGS_URL . 'svg-sprites.svg#' . esc_attr( $icon ) . '">';
		$output .= '</use>';
		$output .= '</svg>';

		if ( $echo ) {
			echo wp_kses(
				$output,
				array(
					'svg' => array(
						'class' => array(),
					),
					'use' => array(
						'xlink:href' => array(),
					),
				)
			);
		} else {
			return $output;
		}

	}

endif;
