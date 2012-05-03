<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package psu_mp504
 * @since psu_mp504 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'psu_mp504_credits' ); ?>
			<a href="http://pdx.edu/professional-development/" title="<?php esc_attr_e( 'Portland State University - Interactive Producer', 'psu_mp504' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'psu_mp504' ), 'PSU' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'psu_mp504' ), 'psu_mp504', '<a href="https://github.com/joesnellpdx/BLA" rel="designer">PSU MP504</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>