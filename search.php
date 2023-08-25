<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

		if ( have_posts() ) :

			/**
			 * Functions hooked into zen_wp_boilerplate_do_page_header action.
			 *
			 * @hooked zen_wp_boilerplate_page_header_starts - 10
			 * @hooked zen_wp_boilerplate_page_title - 15
			 * @hooked zen_wp_boilerplate_page_header_ends - 20
			 */
			do_action( 'zen_wp_boilerplate_do_page_header' );

			/**
			 * Hook: zen_wp_boilerplate_do_before_posts_loop.
			 */
			do_action( 'zen_wp_boilerplate_do_before_posts_loop' );

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			/**
			 * Functions hooked into zen_wp_boilerplate_do_after_posts_loop action.
			 *
			 * @hooked zen_wp_boilerplate_the_posts_navigation - 100
			 */
			do_action( 'zen_wp_boilerplate_do_after_posts_loop' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<?php
		/**
		 * Hook: zen_wp_boilerplate_do_after_main_contents.
		 */
		do_action( 'zen_wp_boilerplate_do_after_main_contents' );
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
