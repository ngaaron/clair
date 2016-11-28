<?php
/**
 * Theme Name: Clair
 * Theme URI: https://onemorecafe.cn/
 * Author: AARON
 * Author URI: https://ngaaron.com/
 * Description: A free wordpress threme name Clair design and develop by Aaron in 2016.
 * Version: 1.2

 * @package WordPress
 * @subpackage Clair
 * @since Clair 1.0
 */
?>

<?php get_header(); ?>
	
<header id="header" class="alt" style="background-image:url(
                                       <?php if(has_post_thumbnail()) : ?>
                                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-thumb' ); echo $image[0]; ?>
                                          <?php else : ?>
                                                <?php echo get_option('def_banner'); ?>
                                           <?php endif; ?>
                                       );">
				<div class="inner">
                    <h1 class="post-page-title "><?php printf( __( '%s', 'solopine' ), single_cat_title( '', false ) ); ?></h1>
					<p>最近更新：<?php the_title();?>/<?php the_time( get_option('date_format') ); ?></p>
                    <p><?php _e( 'Browsing Category', 'solopine' ); ?></p>
				</div>
</header><!-- .site-header -->


        <div id="wrapper">   
                <section id="content" class="main items">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('inc/content-grid', 'page'); ?>
				<?php endwhile; ?>
                    <?php solopine_pagination(); ?>
				<?php endif; ?>
                </section>
        </div>


<?php get_footer(); ?>