<?php
/**
 * Template part for displaying post content in single.php
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Hook: zen_wp_boilerplate_do_before_content.
	 */
	do_action( 'zen_wp_boilerplate_do_before_content' );
	?>

	<header class="entry-header">
		<?php
		/**
		 * Hook: zen_wp_boilerplate_do_before_entry_title.
		 */
		do_action( 'zen_wp_boilerplate_do_before_entry_title' );

		// Display the post title.
		the_title( '<h1 class="entry-title">', '</h1>' );

		/**
		 * Functions hooked into zen_wp_boilerplate_do_after_entry_title action.
		 *
		 * @hooked zen_wp_boilerplate_entry_meta - 10
		 */
		do_action( 'zen_wp_boilerplate_do_after_entry_title' );
		?>
	</header><!-- .entry-header -->

	<?php
	/**
	 * Hook: zen_wp_boilerplate_do_after_entry_header.
	 */
	do_action( 'zen_wp_boilerplate_do_after_entry_header' );
	?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zen-wp-boilerplate' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	/**
	 * Functions hooked into zen_wp_boilerplate_do_after_entry_content action.
	 *
	 * @hooked zen_wp_boilerplate_entry_footer_contents - 10
	 */
	do_action( 'zen_wp_boilerplate_do_after_entry_content' );

	/**
	 * Hook: zen_wp_boilerplate_do_after_content.
	 */
	do_action( 'zen_wp_boilerplate_do_after_content' );
	?>
</article><!-- #post-<?php the_ID(); ?> -->
