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

		<div class="post-info">
			<h2 class="single-post-title"><a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr( the_title_attribute() ); ?>" rel="bookmark">
				<?php the_title(); ?></a></h2>
			<div class="meta-data">
				<span class="entry-date"><?php the_date( 'F jS, Y', '<p>', '</p>' ); ?><p>|</p></span>
				<span class="post-category">
					<?php
					$category = get_the_category();

					if ( $category[0] ) {
						echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>'; // WPCS: XSS ok.
					} ?>
				</span>

			</div> <!--/.meta-data-->
		</div> <!--/.post-info-->

	</article><!-- #post-## -->

<?php endwhile;
wp_reset_postdata(); ?>
</section>

	<?php
}
