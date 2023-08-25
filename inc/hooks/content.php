<?php
/**
 * Zen WP Boilerplate Theme Hooks for the content parts.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_page_header_starts' ) ) :

	/**
	 * Page header starts.
	 */
	function zen_wp_boilerplate_page_header_starts() {

		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
			<?php
		elseif ( is_archive() || is_search() || is_404() ) :
			?>
			<header class="page-header">
			<?php
		endif;

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_page_title' ) ) :

	/**
	 * Display the page title.
	 */
	function zen_wp_boilerplate_page_title() {

		// Display the page header details for archive pages.
		if ( is_archive() ) :
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		elseif ( is_home() && ! is_front_page() ) :
			// Display the page header details for home page.
			?>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<?php
		elseif ( is_search() ) :
			// Display the page header details for search results page.
			?>
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'zen-wp-boilerplate' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
			<?php
		elseif ( is_404() ) :
			// Display the page header details for 404 page.
			?>
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zen-wp-boilerplate' ); ?></h1>
			<?php
		endif;

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_page_header_ends' ) ) :

	/**
	 * Page header ends.
	 */
	function zen_wp_boilerplate_page_header_ends() {

		if ( is_home() && ! is_front_page() ) :
			?>
			</header>
			<?php
		elseif ( is_archive() || is_search() || is_404() ) :
			?>
			</header><!-- .page-header -->
			<?php
		endif;

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_no_results_page_header_starts' ) ) :

	/**
	 * No results found header starts.
	 */
	function zen_wp_boilerplate_no_results_page_header_starts() {
		?>
		<header class="page-header">
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_no_results_page_header_content' ) ) :

	/**
	 * No results found header content.
	 */
	function zen_wp_boilerplate_no_results_page_header_content() {
		?>
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'zen-wp-boilerplate' ); ?></h1>
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_no_results_page_header_ends' ) ) :

	/**
	 * No results found header ends.
	 */
	function zen_wp_boilerplate_no_results_page_header_ends() {
		?>
		</header><!-- .page-header -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_not_found_page_content_starts' ) ) :

	/**
	 * Not found page content starts.
	 */
	function zen_wp_boilerplate_not_found_page_content_starts() {
		?>
		<div class="page-content">
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_not_found_page_content_contents' ) ) :

	/**
	 * Not found page content contents.
	 */
	function zen_wp_boilerplate_not_found_page_content_contents() {

		if ( is_404() ) :
			?>

			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'zen-wp-boilerplate' ); ?></p>

			<?php
			get_search_form();

			the_widget( 'WP_Widget_Recent_Posts' );
			?>

			<div class="widget widget_categories">
				<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'zen-wp-boilerplate' ); ?></h2>
				<ul>
					<?php
					wp_list_categories(
						array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						)
					);
					?>
				</ul>
			</div><!-- .widget -->

			<?php
			/* translators: %1$s: smiley */
			$zen_wp_boilerplate_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'zen-wp-boilerplate' ), convert_smilies( ':)' ) ) . '</p>';
			the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$zen_wp_boilerplate_archive_content" );

			the_widget( 'WP_Widget_Tag_Cloud' );

		else :

			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'zen-wp-boilerplate' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'zen-wp-boilerplate' ); ?></p>
				<?php
				get_search_form();

			else :
				?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zen-wp-boilerplate' ); ?></p>
				<?php
				get_search_form();

			endif;

		endif;
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_not_found_page_content_ends' ) ) :

	/**
	 * Not found page content ends.
	 */
	function zen_wp_boilerplate_not_found_page_content_ends() {
		?>
		</div><!-- .page-content -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_the_posts_navigation' ) ) :

	/**
	 * Display the posts navigation.
	 */
	function zen_wp_boilerplate_the_posts_navigation() {
		the_posts_navigation();
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_the_post_navigation' ) ) :

	/**
	 * Display the post navigation.
	 */
	function zen_wp_boilerplate_the_post_navigation() {

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'zen-wp-boilerplate' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'zen-wp-boilerplate' ) . '</span> <span class="nav-title">%title</span>',
			)
		);

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_comments_template' ) ) :

	/**
	 * Display the comments on single post page and single page after contents.
	 */
	function zen_wp_boilerplate_comments_template() {

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_entry_meta' ) ) :

	/**
	 * Display the entry meta for the post type as post only.
	 */
	function zen_wp_boilerplate_entry_meta() {

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				zen_wp_boilerplate_posted_on();
				zen_wp_boilerplate_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php
		endif;

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_the_post_thumbnail' ) ) :

	/**
	 * Display the post thumbnail image.
	 */
	function zen_wp_boilerplate_the_post_thumbnail() {
		zen_wp_boilerplate_post_thumbnail();
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_entry_footer_contents' ) ) :

	/**
	 * Display the entry footer.
	 */
	function zen_wp_boilerplate_entry_footer_contents() {

		if ( is_page() ) :
			if ( get_edit_post_link() ) :
				?>
				<footer class="entry-footer">
					<?php zen_wp_boilerplate_edit_post_link(); ?>
				</footer><!-- .entry-footer -->
				<?php
			endif;
		else :
			?>
			<footer class="entry-footer">
				<?php zen_wp_boilerplate_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php
		endif;

	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_the_comments_navigation' ) ) :

	/**
	 * Display the comments navigation.
	 */
	function zen_wp_boilerplate_the_comments_navigation() {
		the_comments_navigation();
	}

endif;
