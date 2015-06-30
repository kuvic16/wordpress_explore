<?php
/*
 Plugin Name: Chapter 2 - Favicon
 Plugin URI:
 Description: Favicon example
 Version:     1.0
 Author:      Shaiful Islam Palash<kuvic16@gmail.com> 
 Author URI:  http://sheemoul.wordpress.com
 License:     GPLv2
 */

add_action('wp_head', 'ch2fi_page_header_output');
function ch2fi_page_header_output(){
    $icon_url = plugins_url('/ch2-favicon/favicon.ico', _FILE_);
?>   
<link rel="shortcut icon" href="<?php echo $icon_url; ?>" />
<?php
}

?>

