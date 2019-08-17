=== WP Netlify Deploy ===

Contributors: scottopolis
Tags: netlify, gatsby
Requires at least: 4.5
Tested up to: 5.2.0
Stable tag: 0.41.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Trigger a deployment (or Gatsby rebuild) on Netlify when posts or pages are created or updated.

== Description ==

This plugin calls a Netlify webhook on WordPress actions you choose, such as updating or creating a post or page.

For example, if you are using Gatsby, you can trigger a rebuild on Netlify which will update your static front end.

== Installation ==

* Install and activate the plugin.
* Create a new webook on Netlify under Build and Deploy => Continuous deployment, build hooks.
* Add a deploy notification under Build and Deploy => Deploy Notifications. Click Add notification => Outgoing Webhook, enter this url: https://YOURSITEDOMAIN.com/wp-json/wp-netlify-deploy/notifications
* Add your build hooks to the plugin settings and save.
* Select the hooks you want to trigger a rebuild in the plugin settings, and save.

== Changelog ==

= 0.1.0 = 

* Beta release