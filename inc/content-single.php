
<div class="post-entry">
    <?php the_content();?>
</div>





<?php if(is_single()) : ?>
<?php if(has_tag()) : ?>
	<div class="post-tags">
		<?php the_tags("",""); ?><br/><br/>
	</div>
<?php endif; ?>	
<?php endif; ?>


<?php if(is_single()) : ?>
		<?php get_template_part('inc/about_author'); ?>
<?php endif; ?>


<?php if(is_single()) : ?>
		<?php get_template_part('inc/related_posts'); ?>
<?php endif; ?>



<?php comments_template( '', true );  ?>
