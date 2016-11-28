<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

	<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
                                <?php get_template_part('inc/social'); ?>
						</ul>
						<p class="copyright">&copy; Develop by <a target="new" href="http://ngaaron.com">AARON</a>.</p>
					</footer>

		<!-- Scripts -->
	        

<?php wp_footer(); ?>

</body>
</html>
