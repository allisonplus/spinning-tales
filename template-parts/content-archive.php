<?php
/**
 * Template part for displaying archive posts loop.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spinning Tales
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-single-post' ); ?>>

	<div class="feat-img-wrapper">
		<img src="<?php echo esc_url( cps_featured_fallback( 'featured-blog' ) ); ?>" alt="alt="<?php esc_html_e( 'Featured image for ', 'cps' ); ?><?php echo the_title(); ?>">
	</div>

	<div class="post-info">
		<h2 class="single-post-title"><a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr( the_title_attribute() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="meta-data">
			<span class="entry-date"></i><?php the_date( 'F jS, Y', '<p>', '</p>' ); ?></span>
		</div> <!--/.meta-data-->
	</div> <!--/.post-info-->

</article><!-- #post-## -->
