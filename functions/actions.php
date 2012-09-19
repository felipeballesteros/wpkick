<?php

if(isset($_POST['mode'])){
    require_once('../../../../wp-blog-header.php');

    if($_POST['mode'] == 'ajaxget'){
        $post_id = $_POST['post_id'];
        echo get_post_meta($post_id, 'ag_home_page_display', true);
    }
    elseif($_POST['mode'] == 'ajaxsave'){
        $ids = explode(" ", $_POST['ids']);
        foreach ( $ids as $post_id)
            update_post_meta($post_id, 'ag_home_page_display', $_POST['val']);
    } 
    return;
}

?>



