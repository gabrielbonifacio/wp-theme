<?php
/**
 * Register widget area.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_widgets_init' ) ) :

	/**
	 * Register widget area.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	function zen_wp_boilerplate_widgets_init() {

		// All available widget areas array.
		$zen_wp_boilerplate_widget_areas = array(
			array(
				'name' => esc_html__( 'Sidebar', 'zen-wp-boilerplate' ),
				'id'   => 'main-sidebar',
			),
		);

		// Loop through each of the widget areas and register the required sidebars.
		foreach ( $zen_wp_boilerplate_widget_areas as $zen_wp_boilerplate_widget_area ) {

			// Change the widget id from dash to underscores.
			$zen_wp_boilerplate_widget_id = str_replace( '-', '_', $zen_wp_boilerplate_widget_area['id'] );

			register_sidebar(
				apply_filters(
					'zen_wp_boilerplate_register_' . $zen_wp_boilerplate_widget_id . '_sidebar',
					array(
						'name'          => $zen_wp_boilerplate_widget_area['name'],
						'id'            => $zen_wp_boilerplate_widget_area['id'],
						'description'   => esc_html__( 'Add widgets here.', 'zen-wp-boilerplate' ),
						'before_widget' => apply_filters( 'zen_wp_boilerplate_before_widget', '<section id="%1$s" class="widget %2$s">' ),
						'after_widget'  => apply_filters( 'zen_wp_boilerplate_after_widget', '</section>' ),
						'before_title'  => apply_filters( 'zen_wp_boilerplate_before_title', '<h2 class="widget-title">' ),
						'after_title'   => apply_filters( 'zen_wp_boilerplate_after_title', '</h2>' ),
					)
				)
			);

		}

	}

endif;

add_action( 'widgets_init', 'zen_wp_boilerplate_widgets_init' );
