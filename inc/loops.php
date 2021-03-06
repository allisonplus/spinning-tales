<?php
/**
 * Custom loops.
 *
 * @package Spinning Tales
 */

/**
 * Show Recent Posts.
 */
function cps_show_recent_posts() {
?>

<?php $recent_posts = cps_get_recent_posts(); ?>

<section class="recent-post-container">
<?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-single-post' ); ?>>
		<a class="feat-img-wrapper" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true" role="presentation">
			<img src="<?php echo esc_url( cps_featured_fallback( 'thumbnail' ) ); ?>" alt=""></a>

		<div class="post-info">
			<h2 class="single-post-title"><a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr( the_title_attribute() ); ?>" rel="bookmark">
				<?php the_title(); ?></a></h2>

				<?php if ( get_field( 'excerpt_visibility' ) === null || get_field( 'excerpt_visibility' ) ) : ?>
					<p><?php echo esc_html( cps_get_the_excerpt() ); ?></p>
				<?php else : ?>
					<!-- Return nada. -->
				<?php endif; ?>

			<div class="meta-data">
				<?php echo cps_single_posted_on(); // WPCS: XSS OK. ?>
			</div> <!--/.meta-data-->
		</div> <!--/.post-info-->

	</article><!-- #post-## -->

<?php endwhile;
wp_reset_postdata(); ?>
</section>

	<?php
}
