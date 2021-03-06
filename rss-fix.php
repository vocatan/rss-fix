<?php
/**
 * @package RSS_Fix
 * @version 0.1
 */
/*
Plugin Name: RSS Fix
Plugin URI: http://github.com/vocatan/rss-fix/
Description: When WordPress generates a RSS feed, it adds some inconvenient markup - this removes it.
<pre>
<a title=\"Title\" class=\"read-more\" href=\"https://www.mysite.com/blog/title/\">Read more <span class=\"screen-reader-text\">Title</span></a>
</pre>
Author: Bill Mitchell
Version: 0.1
Author URI: https://github.com/vocatan
*/

// This gets chained to 'the_excerpt_rss' to remove the offending html
function rss_fix($content) {
    $fixPattern = "/.span class=\"screen-reader-text.*\/span./";
    $myfixed = preg_replace( $fixPattern, '', $content);
    return $myfixed;
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'the_excerpt_rss', 'rss_fix' );

