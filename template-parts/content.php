<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spinning Tales
 */

?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( ! is_front_page() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;

if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php cps_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'spin' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spin' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php cps_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
