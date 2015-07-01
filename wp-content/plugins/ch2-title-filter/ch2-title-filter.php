<?php
/*
 Plugin Name: Chapter 2 - Title filter
 Plugin URI:
 Description: Title filter example
 Version:     1.0
 Author:      Shaiful Islam Palash<kuvic16@gmail.com> 
 Author URI:  http://sheemoul.wordpress.com
 License:     GPLv2
 */

add_filter('wp_title', 'ch2tf_title_filter');
function ch2tf_title_filter($title){
    if(is_front_page()){
        $new_title = 'Front Page >> ';
    }elseif (get_post_type() == 'page') {
        $new_title = 'Page >> ';
    }elseif (get_post_type() == 'post') {
        $new_title = 'Post >> ';
    }
    
    if(isset($new_title)){
        $new_title .= $title;
        return $new_title;
    }else{
        return $title;
    }
}

?>

