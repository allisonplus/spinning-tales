<?php
/**
 * ACF custom functions that act independently of the theme templates.
 *
 * @package Spinning Tales
 */

// Hide ACF admin from wp-admin.
// add_filter('acf/settings/show_admin', '__return_false');

if ( function_exists( 'acf_add_options_page' ) ) {

	// // Add options subpage.
	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Choices',
		'menu_title'  => 'Theme Choices',
		'parent_slug' => 'themes.php',
	) );
}
