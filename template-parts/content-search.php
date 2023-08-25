<?php
/**
 * Template part for displaying results in search pages
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

		// Display the post/page title.
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

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

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php
	/**
	 * Functions hooked into zen_wp_boilerplate_do_after_entry_summary action.
	 *
	 * @hooked zen_wp_boilerplate_entry_footer_contents - 10
	 */
	do_action( 'zen_wp_boilerplate_do_after_entry_summary' );

	/**
	 * Hook: zen_wp_boilerplate_do_after_content.
	 */
	do_action( 'zen_wp_boilerplate_do_after_content' );
	?>
</article><!-- #post-<?php the_ID(); ?> -->
