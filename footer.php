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


		<div class="footer-box animated fadeIn scrollToTop">
			<a href="<?php the_permalink(); ?> ">
				<div class="footer-name">
					<i class="fa fa-chevron-up"></i>
					<i class="fa fa-chevron-up"></i>
				</div>
					<p class="back-to-top">
						Back to top
					</p>
			</a>
		</div> <!-- end .footer-box -->


		</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
	</body>
</html>
