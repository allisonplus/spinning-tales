<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spinning Tales
 */

?>
	</div><!-- #content -->

	<footer class="site-footer">
		<div class="wrap">
			<div class="site-info">
				<?php
					cps_do_build_text();
					cps_do_copyright_text();
				?>
			</div>

		</div><!-- .wrap -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
