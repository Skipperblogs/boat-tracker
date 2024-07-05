=== Boat Tracking ===
Author: skipperblgs
Author URI: https://www.skipperblogs.com
Plugin URI: https://wordpress.org/plugins/boat-tracker/
Contributors: skipperblgs
Tags: boat, tracking, map, vessel
Requires at least: 4.6
Tested up to: 6.5.2
Version: 1.0.0
Stable tag: 1.0.0
Requires PHP: 5.4
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Interactive live map with boat tracking. 150 words here

== Description ==

Track your boat with AIS, Iridium, Garmin InReach SPOT, E-mail and embed a live map on your website with [Skipperblogs.com](https://www.skipperblogs.com/?source=wp).
Your position will be live updated with custom messages and weather. Map statistics shows the total distance sailed, average speed etc... as well as visited countries.
In order to work, this plugin requires a registration on [Skipperblogs](https://www.skipperblogs.com/register?source=wp)
You can use the plugin with a free Skipperblogs account. To enjoy automatic tracking a paid plan is required.

Update every hour or less !

= Map =

Simply display the **map** with:

`[boat-tracker]`

Personalize its dimensions:

`[live-map height="300" width="100%"]`

= TRACK YOUR BOAT ON THE SEVEN SEAS WITH SKIPPERBLOGS: =

* ** Interactive map
* ** Customize map background, boat icon and tracks
* ** Tracks editor to freely
* ** Automatic tracking (PREMIUM FEATURE):** your position is automatically updated via AIS, Iridium Go, InReach
* ** Automatic tracking (PREMIUM FEATURE):** your position is automatically updated via AIS, Iridium Go, InReach


Unlock PREMIUM or PRO features with [Webba Booking PRO](https://www.skipperblogs.com/pricing/?source=wp).

Explore the full list of [Webba Booking features](https://www.skipperblogs.com/features/?source=wp).

== OUR CUSTOMERS LOVE US!==

We are proud to have near perfect 5/5 score on Trustpilot:

*“The customer service for this **plugin is phenomenal!**
The customer service for this plugin is absolutely second-to-none. I'm blown away by how good they are!”* - R.Tyrrell

*“Webba support is nothing like what you have experienced in your earlier life and everything you are hoping to have with a product. The response times, the professionalism, the friendliness... you name it, they have it. **Easiest seven star review I have given!**”* - Webba Customer

*“This plugin is awesome and it can accomplish anything your business needs! OMG the support is NUMBER 1!!!! I will refer this plugin to everyone and let them know **the support is just awesome**. I am very pleased with everything!”* - jbiento

== Installation ==

1. Choose to add a new plugin, then click upload
2. Upload the boat-tracker zip
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Use the shortcodes in your pages or posts with `[boat-tracker]`

== Frequently Asked Questions ==

**Is there a free version?**
Yes, abselutely! you can create a [free account here](https://www.skipperblogs.com/register?source=wp), setup your tracking map and embed it on your Wordpress site. Premium .... is for automatic tracking.

**Do you provide support?**

Yes! Just use the contact form at [here ](https://www.skipperblogs.com/contact?source=wp)

= Can I add geojson? =

Yes, just give it a source URL: `[leaflet-geojson src="https://example.com/path/to.geojson"]` It will also support leaflet geojson styles or geojson.io styles. Add a popup message with `[leaflet-geojson popup_text="hello!"]`, or add HTML by adding it to the content of the shortcode: `[leaflet-geojson]<a href="#">Link here, or use text from a feature property, like {title}</a>[/leaflet-geojson]` or identify a geojson property with `popup_property`, and each shape will use its own popup text if available.

= Can I add kml/gpx? =

Sure!? Use the same attributes as leaflet-geojson (above), but use the `[leaflet-kml]` or `[leaflet-gpx]` shortcode.

= Can I add wms? =

Sure. Use the same attributes as boat-tracker, but use the `[leaflet-wms]` shortcode; attributes include: `src`, `layer`, and `crs`.

= Can I add a message to a marker? =

Yes: `[leaflet-marker visible]Hello there![/leaflet-marker]`, where visible designates if it is visible on page load. Otherwise it is only visible when clicked.

= Can I use your plugin with a picture instead of a map? =

Yes: Use `[leaflet-image src="path/to/image/file.jpg"]`.  See screenshots 3 - 5 for help setting that up.

= Can I use my own self-hosted Leaflet files? =

Yes: Add your custom URL to the options in the admin page.

= How can I add a link to a marker? =

Use the marker format `[leaflet-marker]Click here![/leaflet-marker]` and add a hyperlink like you normally would with the WordPress editor.

= I need more functions!

Take a look at the functions of [Extensions for Boat Tracking](https://wordpress.org/plugins/extensions-boat-tracker/).

= Additional questions? =

For more FAQs, please visit the [FAQ section on GitHub here](https://github.com/bozdoz/wp-plugin-boat-tracker#frequently-asked-questions).



== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif).
2. This is the second screen shot

== Changelog ==



= 1.0 =
* First Version. Basic map creation


== Upgrade Notice ==