<?php
/**
 * @package Force_Https_For_Link
 * @version 1.0
 */
/*
Plugin Name: Force Https For Link
Plugin URI: https://github.com/syneart/Force-Https-For-Link
Description: This is not just a plugin, when activated it will force replace your http url to https in every page.
Author: SyneArt
Version: 1.0
Author URI: https://syneart.com/
*/
add_filter( 'site_url', 'force_https' );
add_filter( 'home_url', 'force_https' );
add_filter( 'script_loader_src', 'force_https');
add_filter( 'style_loader_src', 'force_https');
add_filter( 'get_avatar', 'force_https');
function force_https( $string ) {
        return str_replace( 'http://', 'https://', $string );
}
?>
