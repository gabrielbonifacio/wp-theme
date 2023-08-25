<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
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

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	/**
	 * Hook: zen_wp_boilerplate_do_before_comments.
	 */
	do_action( 'zen_wp_boilerplate_do_before_comments' );

	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$zen_wp_boilerplate_comment_count = get_comments_number();
			if ( '1' === $zen_wp_boilerplate_comment_count ) :
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'zen-wp-boilerplate' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			else :
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $zen_wp_boilerplate_comment_count, 'comments title', 'zen-wp-boilerplate' ) ),
					number_format_i18n( $zen_wp_boilerplate_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			endif;
			?>
		</h2><!-- .comments-title -->

		<?php
		/**
		 * Functions hooked into zen_wp_boilerplate_do_after_comments_title action.
		 *
		 * @hooked zen_wp_boilerplate_the_comments_navigation - 10
		 */
		do_action( 'zen_wp_boilerplate_do_after_comments_title' );
		?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => apply_filters( 'zen_wp_boilerplate_comments_list_avatar_size', 64 ),
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		/**
		 * Functions hooked into zen_wp_boilerplate_do_after_comments_list action.
		 *
		 * @hooked zen_wp_boilerplate_the_comments_navigation - 10
		 */
		do_action( 'zen_wp_boilerplate_do_after_comments_list' );

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'zen-wp-boilerplate' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();

	/**
	 * Hook: zen_wp_boilerplate_do_after_comments.
	 */
	do_action( 'zen_wp_boilerplate_do_after_comments' );
	?>

</div><!-- #comments -->
