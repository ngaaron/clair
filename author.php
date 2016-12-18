<?php
/**
 * Theme Name: Clair
 * Theme URI: https://ngaaron.com/2020
 * Author: AARON
 * Author URI: https://ngaaron.com/
 * Description: A free wordpress threme named Clair design and develop by Aaron in 2016.
 * Version: 1.4

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
<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>
				<div class="inner">
                    <h1 class="post-page-title ">作者档案:<?php echo $curauth->display_name; ?></h1>
					<p>个人主页：<a rel="nofollow" href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
                    <p>开始时间<?php the_author_meta( 'user_registered', 1 ); ?></p>
				</div>
</header><!-- .site-header -->


        <div id="wrapper">   
                <section id="content" class="main items">
               


                </section>
        </div>


<?php get_footer(); ?>