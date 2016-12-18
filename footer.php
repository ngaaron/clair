<?php
/**
 * The template for displaying the footer
 *  Themes URL : https://ngaaron.com/2020
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Clair
 * @since clair 1.3
 */
?>

		</div><!-- .site-content -->

	<!-- Footer -->
    <footer id="footer">
				<ul class="icons">
                    <?php get_template_part('inc/social'); ?>
                </ul>
				<p class="copyright">&copy; Develop by <a target="new" href="http://ngaaron.com">AARON</a>.
                    <a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"><?php echo get_option( 'zh_cn_l10n_icp_num' );?></a>
                </p>
    </footer>

		<!-- Scripts -->
	        

<?php wp_footer(); ?>
<script>
    (function(){
        var bp = document.createElement('script');
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
</body>
</html>
