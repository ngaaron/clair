<?php  /**主题设置项更新页面**/
 
/**主题设置项更新页面**/
 
//成功提示
define('SuccessInfo','<div class="updated"><p><strong>设置已保存。</strong></p></div>');
 
//主题设置
function BaseSettings(){
    if ($_POST['update_options']=='true') {
        
        // 基本设置
        update_option('theme_cat', $_POST['theme_cat']); //Categories
        update_option('theme_cat_number', $_POST['theme_cat_number']); //input
        if ($_POST['theme_button_post']=='on') { $display = 'checked'; } else { $display = ''; }
        update_option('theme_button_post', $display); //button-index
        update_option('theme_button_post_down', $_POST['theme_button_post_down']); //input
        update_option('theme_button_post_url', $_POST['theme_button_post_url']); //input
        update_option('theme_button_post_title', $_POST['theme_button_post_title']); //input
        update_option('theme_button_post_meta', $_POST['theme_button_post_meta']); //textarea
        if ($_POST['theme_author_index']=='on') { $display = 'checked'; } else { $display = ''; }
        update_option('theme_author_index', $display); //author-index 
        if ($_POST['theme_author_post']=='on') { $display = 'checked'; } else { $display = ''; }
        update_option('theme_author_post', $display); //author-post
        if ($_POST['theme_alsolike_post']=='on') { $display = 'checked'; } else { $display = ''; }
        update_option('theme_alsolike_post', $display); //alsolike-post
        update_option('def_banner', $_POST['def_banner']); //Upload
        echo SuccessInfo;
        
        // 社交媒体
        if ($_POST['theme_social']=='on') { $display = 'checked'; } else { $display = ''; }
        update_option('theme_social', $display); //checkbox    
        update_option('sp_weibo', $_POST['sp_weibo']); //input
        update_option('sp_zhihu', $_POST['sp_zhihu']); //input
        update_option('sp_github', $_POST['sp_github']); //input
        update_option('sp_facebook', $_POST['sp_twitter']); //input
        update_option('sp_twitter', $_POST['sp_twitter']); //input
        update_option('sp_instagram', $_POST['sp_instagram']); //input
        update_option('sp_tumblr', $_POST['sp_tumblr']); //input
        update_option('sp_youtube', $_POST['sp_youtube']); //input
        update_option('sp_dribbble', $_POST['sp_dribbble']); //input
        update_option('sp_vimeo', $_POST['sp_vimeo']); //input
        update_option('sp_linkedin', $_POST['sp_linkedin']); //input
        update_option('sp_rss', $_POST['sp_rss']); //input
        
        
    }
    require_once(get_template_directory().'/inc/opt/opt-theme.php'); //代码解耦
    add_action('admin_menu', 'BaseSettings');
}
 
//主题说明
function AdvancedSettings(){
    if ($_POST['update_options']=='true') {
   
    }
    require_once(get_template_directory().'/inc/opt/opt-author.php');  //代码解耦
    add_action('admin_menu', 'AdvancedSettings');
}
 
?>
 