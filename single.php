<?php
/**
 * Theme Name: Clair
 * Theme URI: https://onemorecafe.cn/
 * Author: AARON
 * Author URI: https://ngaaron.com/
 * Description: A free wordpress threme name Clair design and develop by Aaron in 2016.
 * Version: 1.2
 *
 * @package WordPress
 * @subpackage Clair
 * @since Clair 1.0
 */


get_header(); ?>

   <section  id="primary" class="content-area">
	<main  class="full-page">
        <div class="full-content" >
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'inc/content-single', 'page' );

	
			// End of the loop.
		endwhile;
		?>
                </div>
	</main><!-- .site-main -->
</section>

<?php get_footer(); ?>