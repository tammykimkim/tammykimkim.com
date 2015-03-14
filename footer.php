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

		<div class="footer-box scrollToTop">
			<a href="<?php the_permalink(); ?> ">
				<div class="footer-name">
					<i class="fa fa-chevron-up"></i>
					<i class="fa fa-chevron-up"></i>
				</div>
					<p class="main-navigation">
						Back to top
					</p>
			</a>
		</div> <!-- end .footer-box -->

		<div>
			&copy; HackerYou <?php echo date('Y'); ?>
		</div>
		
			<div class="site-info">
				<?php printf( __( 'Theme: %1$s by %2$s.', 'one-page-theme' ), 'One Page Theme', '<a href="http://tammykimkim.com/" rel="designer">tammykimkim.com</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	</body>
</html>
