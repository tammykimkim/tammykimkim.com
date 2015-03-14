<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package One Page Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	<p>&copy; HackerYou <?php echo date('Y'); ?></p>
	
		<div class="site-info">
			<?php printf( __( 'Theme: %1$s by %2$s.', 'one-page-theme' ), 'One Page Theme', '<a href="http://tammykimkim.com/" rel="designer">tammykimkim.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
