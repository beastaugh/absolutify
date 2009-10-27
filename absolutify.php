<?php
/*
Plugin Name: Absolutify
Plugin URI: http://extralogical.net/
Description: Turn relative URIs in posts, pages and comments into absolute ones.
Author: Benedict Eastaugh
Version: 1.1
Author URI: http://extralogical.net/
.
Absolutify is released under the GPL. Please see the LICENCE file for details.
.
*/

/**
 * Turns relative URIs into absolute ones.
 *
 * This plugin fixes the issues you'll otherwise have when using relative URIs
 * if your content is loaded in a context outside your site. Works for links
 * using both single and double quotes. It can also be handy if you ever move
 * your domain.
 *
 * @uses get_bloginfo
 *
 * @param string $content
 * @return string
 */
function absolutify_content_urls($content) {
    $url = get_bloginfo('url');
    return preg_replace("/href=(\"|')\//", "href=\${1}$url/", $content);
}

add_filter('the_content',  'absolutify_content_urls');
add_filter('comment_text', 'absolutify_content_urls');

?>