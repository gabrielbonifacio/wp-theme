<?php
/**
 * Zen WP Boilerplate Theme Hooks
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hooks for the header parts of this theme.
 */
// HTML header meta tags.
add_action( 'zen_wp_boilerplate_do_head', 'zen_wp_boilerplate_header_meta_tags', 10 );

// Page starts.
add_action( 'zen_wp_boilerplate_do_before', 'zen_wp_boilerplate_page_starts', 10 );
// Skip to content link.
add_action( 'zen_wp_boilerplate_do_before', 'zen_wp_boilerplate_skip_content_link', 15 );

// Header starts.
add_action( 'zen_wp_boilerplate_do_before_header', 'zen_wp_boilerplate_header_starts', 10 );
// Display the site branding.
add_action( 'zen_wp_boilerplate_do_header', 'zen_wp_boilerplate_site_branding', 10 );
// Display the site navigation.
add_action( 'zen_wp_boilerplate_do_header', 'zen_wp_boilerplate_site_navigation', 15 );
// Header ends.
add_action( 'zen_wp_boilerplate_do_after_header', 'zen_wp_boilerplate_header_ends', 10 );

// Content starts.
add_action( 'zen_wp_boilerplate_do_before_content_starts', 'zen_wp_boilerplate_content_wrapper_starts', 10 );


/**
 * Hooks for the content parts of this theme.
 */
// Page header starts.
add_action( 'zen_wp_boilerplate_do_page_header', 'zen_wp_boilerplate_page_header_starts', 10 );
// Display the page title.
add_action( 'zen_wp_boilerplate_do_page_header', 'zen_wp_boilerplate_page_title', 15 );
// Page header ends.
add_action( 'zen_wp_boilerplate_do_page_header', 'zen_wp_boilerplate_page_header_ends', 20 );

// No results found header starts.
add_action( 'zen_wp_boilerplate_do_no_results_page_header', 'zen_wp_boilerplate_no_results_page_header_starts', 10 );
// No results found header content.
add_action( 'zen_wp_boilerplate_do_no_results_page_header', 'zen_wp_boilerplate_no_results_page_header_content', 15 );
// No results found header ends.
add_action( 'zen_wp_boilerplate_do_no_results_page_header', 'zen_wp_boilerplate_no_results_page_header_ends', 20 );

// Not found page content starts.
add_action( 'zen_wp_boilerplate_do_not_found_page_content', 'zen_wp_boilerplate_not_found_page_content_starts', 10 );
// Not found page content contents.
add_action( 'zen_wp_boilerplate_do_not_found_page_content', 'zen_wp_boilerplate_not_found_page_content_contents', 15 );
// Not found page content ends.
add_action( 'zen_wp_boilerplate_do_not_found_page_content', 'zen_wp_boilerplate_not_found_page_content_ends', 20 );

// Display the posts navigation.
add_action( 'zen_wp_boilerplate_do_after_posts_loop', 'zen_wp_boilerplate_the_posts_navigation', 100 );

// Display the post navigation.
add_action( 'zen_wp_boilerplate_do_after_single_post_content', 'zen_wp_boilerplate_the_post_navigation', 10 );

// Display the comments on single post page and single page after contents.
add_action( 'zen_wp_boilerplate_do_after_single_post_content', 'zen_wp_boilerplate_comments_template', 15 );
add_action( 'zen_wp_boilerplate_do_after_single_page_content', 'zen_wp_boilerplate_comments_template', 10 );

// Display the entry meta for the post type as post only.
add_action( 'zen_wp_boilerplate_do_after_entry_title', 'zen_wp_boilerplate_entry_meta', 10 );

// Display the post thumbnail image.
add_action( 'zen_wp_boilerplate_do_after_entry_header', 'zen_wp_boilerplate_the_post_thumbnail', 10 );

// Display the entry footer.
add_action( 'zen_wp_boilerplate_do_after_entry_content', 'zen_wp_boilerplate_entry_footer_contents', 10 );
add_action( 'zen_wp_boilerplate_do_after_entry_summary', 'zen_wp_boilerplate_entry_footer_contents', 10 );

// Display the comments navigation.
add_action( 'zen_wp_boilerplate_do_after_comments_title', 'zen_wp_boilerplate_the_comments_navigation', 10 );
add_action( 'zen_wp_boilerplate_do_after_comments_list', 'zen_wp_boilerplate_the_comments_navigation', 10 );


/**
 * Hooks for the footer parts of this theme.
 */
// Content ends.
add_action( 'zen_wp_boilerplate_do_after_content_ends', 'zen_wp_boilerplate_content_wrapper_ends', 10 );

// Footer starts.
add_action( 'zen_wp_boilerplate_do_before_footer', 'zen_wp_boilerplate_footer_starts', 10 );

// Footer ends.
add_action( 'zen_wp_boilerplate_do_after_footer', 'zen_wp_boilerplate_footer_ends', 10 );

// Page ends.
add_action( 'zen_wp_boilerplate_do_after', 'zen_wp_boilerplate_page_ends', 10 );
