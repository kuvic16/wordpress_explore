<?php
/*
 Plugin Name: Chapter 2 - Email Page Link
 Plugin URI:
 Description: Email page link example
 Version:     1.0
 Author:      Shaiful Islam Palash<kuvic16@gmail.com> 
 Author URI:  http://sheemoul.wordpress.com
 License:     GPLv2
 */

add_filter('the_content', 'ch2epl_email_page_filter');

function ch2epl_email_page_filter($the_content){
    $mail_icon_url = plugins_url('/ch2-email-page-link/mailicon.png', _FILE_);
    
    $new_content = $the_content;
    $new_content .= "<a title='E-mail article link' href='mailto:someone@somewhere.com?subject=Check out this intersting aricle entitled ";
    $new_content .= get_the_title();
    $new_content .= "&body=Hi!%0A%0AI thought you would enjoy this article entitled ";
    $new_content .= get_the_title();
    $new_content .= ".%0A%0A";
    $new_content .= get_permalink();
    $new_content .= "%0A%0AEnjoy!'> <img alt='' src='".$mail_icon_url."' /></a>";
    return $new_content;
}
?>

