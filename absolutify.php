<?php
/*
Plugin Name: Absolutify
Plugin URI: http://extralogical.net/
Description: Turn relative URIs in your posts and pages into absolute ones, fixing the issues you'll otherwise have when your content is loaded in a context outside your site.
Author: Benedict Eastaugh
Version: 1.0
Author URI: http://extralogical.net/
.
Works for links using both single and double quotes. Also handy if you ever move your domain.
.
*/

function absolutify_content_urls($content) {
	$url = get_bloginfo('url');
	return preg_replace("/href=(\"|')\//", "href=\${1}$url/", $content);
}

add_filter('the_content', 'absolutify_content_urls');

?>