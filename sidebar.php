<?php
/**
 * The sidebar containing the main widget area
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

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php
	/**
	 * Hook: zen_wp_boilerplate_do_widget_before.
	 */
	do_action( 'zen_wp_boilerplate_do_widget_before' );

	// Display the sidebar area.
	dynamic_sidebar( 'main-sidebar' );

	/**
	 * Hook: zen_wp_boilerplate_do_widget_after.
	 */
	do_action( 'zen_wp_boilerplate_do_widget_after' );
	?>
</aside><!-- #secondary -->
