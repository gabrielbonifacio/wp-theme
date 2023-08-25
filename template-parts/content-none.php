<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="no-results not-found">
	<?php
	/**
	 * Hook: zen_wp_boilerplate_do_before_content.
	 */
	do_action( 'zen_wp_boilerplate_do_before_content' );

	/**
	 * Functions hooked into zen_wp_boilerplate_do_no_results_page_header action.
	 *
	 * @hooked zen_wp_boilerplate_no_results_page_header_starts - 10
	 * @hooked zen_wp_boilerplate_no_results_page_header_content - 15
	 * @hooked zen_wp_boilerplate_no_results_page_header_ends - 20
	 */
	do_action( 'zen_wp_boilerplate_do_no_results_page_header' );

	/**
	 * Functions hooked into zen_wp_boilerplate_do_not_found_page_content action.
	 *
	 * @hooked zen_wp_boilerplate_not_found_page_content_starts - 10
	 * @hooked zen_wp_boilerplate_not_found_page_content_contents - 15
	 * @hooked zen_wp_boilerplate_not_found_page_content_ends - 20
	 */
	do_action( 'zen_wp_boilerplate_do_not_found_page_content' );

	/**
	 * Hook: zen_wp_boilerplate_do_after_content.
	 */
	do_action( 'zen_wp_boilerplate_do_after_content' );
	?>
</section><!-- .no-results -->
