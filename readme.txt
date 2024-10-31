=== Responsive Embed Videos ===
Contributors: kywyz
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PD69D3UREBLAW
Tags: responsive, youtube, vimeo, videos, player, embed, simple, shortcode
License: GPLv2 or later
Requires at least: 3.9
Tested up to: 4.4
Stable tag: 0.0.1

This plugins makes your embed videos included with its shortcode responsive. Compatible with Youtube and Vimeo.

== Description ==

Responsive Embed Videos allows you to easily add youtube or vimeo videos to your website using our shortcode like :

[rev video='http://youtube.com/watch?v=whatever'] or [rev video='http://vimeo.com/whatever']

All videos embeded with this shortcode will be fully responsive.

Here is a list of the shortcode attributes  :

video - default: none | This is the url of your video, from youtube or vimeo only for now.

width - default: 100% | This is the width ( in % ) of the player.

align - default: center, left, right | The horizontal alignment of the video.

ratio - default: 16/9 | This is the ratio we use to resize the player. 

style - default: simple, normal | This is the style of the player.

Languages: English.

Disclaimer : 

I can't guarantee a 100% compatibility with advanced themes who may already make the embed videos responsive or with other video plugins. 

== Changelog ==

= 0.0.1 =
* Very first release.

== Installation ==

This section describes how to install the plugin and get it working.

Uploading the Plugin : 

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

Creating a video player :

1. Use the shortcode [rev video='the-video-url'/]

Note : The plugin automatically detects if it's a youtube or a vimeo video.