<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		/**
		 * Hook: zen_wp_boilerplate_do_before_main_contents.
		 */
		do_action( 'zen_wp_boilerplate_do_before_main_contents' );
		?>

		<section class="error-404 not-found">
			<?php
			/**
			 * Functions hooked into zen_wp_boilerplate_do_page_header action.
			 *
			 * @hooked zen_wp_boilerplate_page_header_starts - 10
			 * @hooked zen_wp_boilerplate_page_title - 15
			 * @hooked zen_wp_boilerplate_page_header_ends - 20
			 */
			do_action( 'zen_wp_boilerplate_do_page_header' );

			/**
			 * Functions hooked into zen_wp_boilerplate_do_not_found_page_content action.
			 *
			 * @hooked zen_wp_boilerplate_not_found_page_content_starts - 10
			 * @hooked zen_wp_boilerplate_not_found_page_content_contents - 15
			 * @hooked zen_wp_boilerplate_not_found_page_content_ends - 20
			 */
			do_action( 'zen_wp_boilerplate_do_not_found_page_content' );
			?>
		</section><!-- .error-404 -->

		<?php
		/**
		 * Hook: zen_wp_boilerplate_do_after_main_contents.
		 */
		do_action( 'zen_wp_boilerplate_do_after_main_contents' );
		?>
	</main><!-- #main -->

<?php
get_footer();
