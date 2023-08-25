<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		/**
		 * Hook: zen_wp_boilerplate_do_before_main_contents.
		 */
		do_action( 'zen_wp_boilerplate_do_before_main_contents' );

		/**
		 * Hook: zen_wp_boilerplate_do_before_single_loop.
		 */
		do_action( 'zen_wp_boilerplate_do_before_single_loop' );

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			/**
			 * Functions hooked into zen_wp_boilerplate_do_after_single_page_content action.
			 *
			 * @hooked zen_wp_boilerplate_comments_template - 10
			 */
			do_action( 'zen_wp_boilerplate_do_after_single_page_content' );

		endwhile; // End of the loop.

		/**
		 * Hook: zen_wp_boilerplate_do_after_single_loop.
		 */
		do_action( 'zen_wp_boilerplate_do_after_single_loop' );

		/**
		 * Hook: zen_wp_boilerplate_do_after_main_contents.
		 */
		do_action( 'zen_wp_boilerplate_do_after_main_contents' );
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
