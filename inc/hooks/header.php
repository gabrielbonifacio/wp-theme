<?php
/**
 * Zen WP Boilerplate Theme Hooks for the header parts.
 *
 * @since   1.0.0
 * @package Zen_WP_Boilerplate
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'zen_wp_boilerplate_header_meta_tags' ) ) :

	/**
	 * HTML header meta tags.
	 */
	function zen_wp_boilerplate_header_meta_tags() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="<?php echo apply_filters( 'zen_wp_boilerplate_viewport_content', 'width=device-width, initial-scale=1' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_page_starts' ) ) :

	/**
	 * Page starts.
	 */
	function zen_wp_boilerplate_page_starts() {
		?>
		<div id="page" class="site">
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_skip_content_link' ) ) :

	/**
	 * Skip to content link.
	 */
	function zen_wp_boilerplate_skip_content_link() {
		?>
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zen-wp-boilerplate' ); ?></a>
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_header_starts' ) ) :

	/**
	 * Header starts.
	 */
	function zen_wp_boilerplate_header_starts() {
		?>
		<header id="masthead" class="site-header">
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_site_branding' ) ) :

	/**
	 * Display the site branding.
	 */
	function zen_wp_boilerplate_site_branding() {
		?>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$zen_wp_boilerplate_description = get_bloginfo( 'description', 'display' );
			if ( $zen_wp_boilerplate_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $zen_wp_boilerplate_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_site_navigation' ) ) :

	/**
	 * Display the site navigation.
	 */
	function zen_wp_boilerplate_site_navigation() {
		?>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zen-wp-boilerplate' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_header_ends' ) ) :

	/**
	 * Header ends.
	 */
	function zen_wp_boilerplate_header_ends() {
		?>
		</header><!-- #masthead -->
		<?php
	}

endif;

if ( ! function_exists( 'zen_wp_boilerplate_content_wrapper_starts' ) ) :

	/**
	 * Content starts.
	 */
	function zen_wp_boilerplate_content_wrapper_starts() {
		?>
		<div id="content" class="site-content">
		<?php
	}

endif;
