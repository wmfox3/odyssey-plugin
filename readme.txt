=== Plugin Name ===
Contributors: wmfox3 (this should be a list of wordpress.org userid's)
Donate link: http://www.greenvilleonline.com/
Tags: odyssey, saxotech, feed, getcontent
Requires at least: 3.2.1
Tested up to: 3.2
Stable tag: 1.0

A Toolkit for facilitating Odyssey functionality in Wordpress.

== Description ==

This is a toolkit for integrating Odyssey and Wordpress. As of version 1.0, the plug-in provides a newswellmod feed that can be used on Odyssey pages to display blog posts filtered by included or excluded categories.

Additional functionality will be added going forward.

A few notes:

*   If you're not familiar with Odyssey, this plug-in is of no use to you.

== Installation ==

1. Upload the `odyssey' folder to your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What's Odyssey? =

If you have to ask, this plug-in is not for you.

= I've got it installed. Now what? =

The plug-in currently returns an html fragment for inclusion on an Odyssey page.

You can call the 10 most recent posts to a given blog formatted for the Odyssey newswell module by passing newswellmod as the feed type, i.e.

http://data.greenvilleonline.com/blogs/the-carolina-blog/?feed=newswellmod

You can specify a category using the slug of the category like this:

http://data.greenvilleonline.com/blogs/politics/?feed=newswellmod&categoryslug=barack-obama

You can pass an array of categories to include and/or exclude like this:

http://data.greenvilleonline.com/blogs/politics/?feed=newswellmod&category=35,30&excategory=5

== Screenshots ==

None currently.

== Changelog ==

= 1.0 =
* Initial release.
