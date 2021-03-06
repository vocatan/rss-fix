# rss-fix
When WordPress generates a RSS feed, it adds some inconvenient markup - this removes it.


# Details
Description: When WordPress generates a RSS feed, it adds some inconvenient markup - this removes it
.
<pre>
&lt;a title=\"Title\" class=\"read-more\" href=\"https://www.mysite.com/blog/title/\"&gt;
Read more &lt;span class=\"screen-reader-text\"&gt;Title&lt;/span&gt;&lt;/a&gt;
</pre>

After the fix runs:
<pre>
&lt;a title=\"Title\" class=\"read-more\" href=\"https://www.mysite.com/blog/title/\"&gt;Read more &lt;/a&gt;
</pre>

