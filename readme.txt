=== RSS Fix ===
Contributors: vocatan
Stable tag: 0.1
Tested up to: 5.6.2
Requires at least: 5.5.3

Description: When WordPress generates a RSS feed, it adds some inconvenient markup - this removes it
.

== Description ==

Description: When WordPress generates a RSS feed, it adds some inconvenient markup - this removes it
.
<pre>
<a title=\"Title\" class=\"read-more\" href=\"https://www.mysite.com/blog/title/\">Read more <span class=\"screen-reader-text\">Title</span></a>
</pre>

After the fix runs:
<pre>
<a title=\"Title\" class=\"read-more\" href=\"https://www.mysite.com/blog/title/\">Read more </a>
</pre>

