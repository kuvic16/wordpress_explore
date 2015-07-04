<?php
/*
 Plugin Name: Chapter 2 - Nav Menu Filter
 Plugin URI:
 Description: Example of nav menu filter
 Version:     1.0
 Author:      Shaiful Islam Palash<kuvic16@gmail.com> 
 Author URI:  http://sheemoul.wordpress.com
 License:     GPLv2
 */

add_filter('wp_nav_menu_objects', 'ch2nmf_new_nav_menu_items', 10, 2);

function ch2nmf_new_nav_menu_items($sorted_menu_items, $args){
    //print_r($sorted_menu_items);
    //return $sorted_menu_items;
    
    if(is_user_logged_in() == FALSE){
        foreach ($sorted_menu_items as $key => $sorted_menu_item){
            if($sorted_menu_item->title == "Private area"){
                unset($sorted_menu_items[$key]);
            }
        }
    }
    return $sorted_menu_items;
}

?>