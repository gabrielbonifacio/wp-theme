<?php
/**
 * Zen WP Boilerplate Theme Customizer
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_customize_register' ) ) :

	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function zen_wp_boilerplate_customize_register( $wp_customize ) {

		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		if ( isset( $wp_customize->selective_refresh ) ) {
			$wp_customize->selective_refresh->add_partial(
				'blogname',
				array(
					'selector'        => '.site-title a',
					'render_callback' => 'zen_wp_boilerplate_customize_partial_blogname',
				)
			);
			$wp_customize->selective_refresh->add_partial(
				'blogdescription',
				array(
					'selector'        => '.site-description',
					'render_callback' => 'zen_wp_boilerplate_customize_partial_blogdescription',
				)
			);
		}

	}

endif;

add_action( 'customize_register', 'zen_wp_boilerplate_customize_register' );

if ( ! function_exists( 'zen_wp_boilerplate_customize_partial_blogname' ) ) :

	/**
	 * Render the site title for the selective refresh partial.
	 *
	 * @return void
	 */
	function zen_wp_boilerplate_customize_partial_blogname() {
		bloginfo( 'name' );
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_customize_partial_blogdescription' ) ) :

	/**
	 * Render the site tagline for the selective refresh partial.
	 *
	 * @return void
	 */
	function zen_wp_boilerplate_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_customize_preview_js' ) ) :

	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 */
	function zen_wp_boilerplate_customize_preview_js() {

		// Enqueue live preview JS.
		wp_enqueue_script(
			'zen-wp-boilerplate-customizer',
			ZEN_WP_BOILERPLATE_JS_URL . 'customizer' . zen_wp_boilerplate_suffix() . '.js',
			array(
				'customize-preview',
			),
			ZEN_WP_BOILERPLATE,
			true
		);

	}

endif;

add_action( 'customize_preview_init', 'zen_wp_boilerplate_customize_preview_js' );
