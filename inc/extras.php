<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Spinning Tales
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cps_body_classes( $classes ) {

	global $is_IE;

	// If it's IE, add a class.
	if ( $is_IE ) {
		$classes[] = 'ie';
	}

	// Give all pages a unique class.
	if ( is_page() ) {
		$classes[] = 'page-' . basename( get_permalink() );
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds "no-js" class. If JS is enabled, this will be replaced (by javascript) to "js".
	$classes[] = 'no-js';

	return $classes;
}
add_filter( 'body_class', 'cps_body_classes' );

add_action( 'wp_footer', 'cps_google_analytics' );
/**
 * Add Google Analytics Tracking.
 */
function cps_google_analytics() {
	// Hook into the footer. ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'CODE HERE', 'auto');
		ga('send', 'pageview');
	</script>

	<?php
}
