<?php

	/* Template Name: 友情链接 */

?>

<?php get_header(); ?>




<section  id="primary" class="content-area">
		<main  class="full-page">
        <div class="full-content" >
        
            
            <div class="link-content">
            <h2 style="text-align: center;">友情链接</h2>
            <?php 
                $bookmarks = get_bookmarks('category_name=');
                if ( !empty($bookmarks) ){ 
                        echo '<ul>';    
                        foreach ($bookmarks as $bookmark) {        
                            echo '
                <li class="link-meta">
                    <a href="' . $bookmark->link_url . '" title="' . $bookmark->link_description . '" target="_blank" >
                    <img class="link-img" src="http://api.page2images.com/directlink?p2i_url=' . $bookmark->link_url . '&p2i_key=1b903dca742f9935&p2i_device=6&p2i_size=200x200"></a>
                    <span class="link-sitename">'. $bookmark->link_name .'</span>
                    <a class="link-avator">'. get_avatar($bookmark->link_notes,64) .' </a>
                </li>
                            ';    
                            } 
                        echo '</ul>';}
                    ?>
            </div>
            
            <div>
		      <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                // Include the page content template.
                get_template_part( 'inc/content-single', 'page' );
		      	// End of the loop.
                endwhile;
                ?>
            </div>
            
            
        </div>         
</main></section>

<?php get_footer(); ?>
