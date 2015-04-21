<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mo
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<p class=""> <?php bloginfo( 'name' ); ?> &copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
					<div class="cw">
					<a href="http://crane-west.com/"><img src="http://gwfsa.org/wp-content/themes/cw/image/cw-light.png" alt="" /></a>
					</div>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>