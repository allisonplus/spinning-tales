<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spinning Tales
 */

?>

<article <?php post_class( 'blog-post' ); ?>>

	<div class="card-content">
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			if ( is_home() ) :
				if ( get_field( 'excerpt_visibility' ) === null || get_field( 'excerpt_visibility' ) ) :
					echo cps_get_the_excerpt( array( // WPCS: XSS OK.
						'length' => 24,
					) );
				else : ?>
					<!-- Return nada. -->
				<?php endif; ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="meta-data">
					<span class="entry-date"><?php the_date( 'F jS, Y', '<p>', '</p>' ); ?></span>
				</div> <!--/.meta-data-->

				<?php endif; ?>
			<?php else :
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'cps' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			endif; // WPCS: XSS OK.

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cps' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!--.card-content-->

	<div class="feat-img-wrapper">
		<img src="<?php echo esc_url( cps_featured_fallback( 'featured-blog' ) ); ?>" alt="">
	</div>
</article><!-- #post-## -->
