# WP Netlify Deploy 

This plugin triggers a Netlify deploy when a WordPress post is updated or created. It is meant to be used for headless WordPress with Gatsby as a front end.

Full tutorial for usage located here: [https://scottbolinger.com/headless-wordpress-with-gatsby/](https://scottbolinger.com/headless-wordpress-with-gatsby/)

## Usage

* Clone this repository, unzip and add to wp-content/plugins
* Active the plugin
* Create a new webook on Netlify under Build and Deploy => Continuous deployment, build hooks.
* Coming soon...Add a deploy notification under Build and Deploy => Deploy Notifications. Click Add notification => Outgoing Webhook, enter this url: https://YOURSITEDOMAIN.com/wp-json/wp-netlify-deploy/notifications
* Add your build hooks to the plugin settings and save.
* Select the hooks you want to trigger a rebuild in the plugin settings, and save.