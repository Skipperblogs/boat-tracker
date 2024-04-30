=== Boat Tracking ===
Author: skipperblgs
Author URI: https://www.skipperblogs.com
Plugin URI: https://wordpress.org/plugins/boat-tracking/
Contributors: skipperblgs
Tags: boat, tracking, map
Requires at least: 4.6
Tested up to: 6.5.2
Version: 1.0.0
Stable tag: 1.0.0
Requires PHP: 5.4
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Interactive live map with boat tracking. 150 words here

== Description ==

Add a map generated with [Skipperblogs](https://www.skipperblogs.com/) for tracking your boat with marine technologies such as Iridium Go, AIS, Garmin InReach, SPOT, YB Tracking. Includes statistics about your voyage like total distance sailed, average speed, top speed, etc.
In order to work, this plugin requires a registration on [Skipperblogs](https://www.skipperblogs.com/register)
You can use the plugin with a free Skipperblogs account. To enjoy automatic tracking a paid plan is required.

Update every hour or less !

= Map =

Simply display the **map** with:

`[boat-tracking]`

Personalize its dimensions:

`[live-map height="300" width="100%"]`

= More =

Personalize map background, track color and style, boat icon and statistics from the Skipperblogs' dashboard [https://www.skipperblogs.com/dashboard](https://www.skipperblogs.com/dashboard)

== Installation ==

1. Choose to add a new plugin, then click upload
2. Upload the boat-tracking zip
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Use the shortcodes in your pages or posts with `[boat-tracking]`

== Frequently Asked Questions ==

= Can I have an SVG Marker? =

Yes! Convert the default marker into an svg with a shortcode like this: `[leaflet-marker svg color="white" iconClass="fab fa-wordpress-simple" background="red"]` The `iconClass` is perfect for adding a [font-awesome](https://fontawesome.com/icons?d=gallery) icon.

= How do I change the style for lines/geojson? =

Pass the style attributes to the respective shortcodes (see all options on [LeafletJS](http://leafletjs.com/reference-1.0.3.html#path)):

`[leaflet-line color="red" weight=10 dasharray="2,15" addresses="Halifax, NS; Tanzania" classname=marching-ants]`

= Can I add geojson? =

Yes, just give it a source URL: `[leaflet-geojson src="https://example.com/path/to.geojson"]` It will also support leaflet geojson styles or geojson.io styles. Add a popup message with `[leaflet-geojson popup_text="hello!"]`, or add HTML by adding it to the content of the shortcode: `[leaflet-geojson]<a href="#">Link here, or use text from a feature property, like {title}</a>[/leaflet-geojson]` or identify a geojson property with `popup_property`, and each shape will use its own popup text if available.

= Can I add kml/gpx? =

Sure!? Use the same attributes as leaflet-geojson (above), but use the `[leaflet-kml]` or `[leaflet-gpx]` shortcode.

= Can I add wms? =

Sure. Use the same attributes as boat-tracking, but use the `[leaflet-wms]` shortcode; attributes include: `src`, `layer`, and `crs`.

= Can I add a message to a marker? =

Yes: `[leaflet-marker visible]Hello there![/leaflet-marker]`, where visible designates if it is visible on page load. Otherwise it is only visible when clicked.

= Can I use your plugin with a picture instead of a map? =

Yes: Use `[leaflet-image src="path/to/image/file.jpg"]`.  See screenshots 3 - 5 for help setting that up.

= Can I use my own self-hosted Leaflet files? =

Yes: Add your custom URL to the options in the admin page.

= How can I add a link to a marker? =

Use the marker format `[leaflet-marker]Click here![/leaflet-marker]` and add a hyperlink like you normally would with the WordPress editor.

= I need more functions!

Take a look at the functions of [Extensions for Boat Tracking](https://wordpress.org/plugins/extensions-boat-tracking/).

= Additional questions? =

For more FAQs, please visit the [FAQ section on GitHub here](https://github.com/bozdoz/wp-plugin-boat-tracking#frequently-asked-questions).

== Screenshots ==

1. Put the shortcode into the post.
2. See the shortcode play out on the front end.
3. For `[leaflet-image]` upload an image, and copy the URL from the right-hand side
4. For `[leaflet-image]` paste that image URL into an attribute titled `source`: example: `src="https://picsum.photos/1000/1000/"`.
5. See the `[leaflet-image]` on the front end.
6. If you use `[leaflet-marker draggable]`, then you can drag the marker where you want it, open a developers console, and see the specific shortcode to use.
7. Add geojson via URL: `[leaflet-geojson src="https://example.com/path/to.geojson"]`
8. MapQuest requires an app key, get it from their website; alternatively, you can use OpenStreetMap as a free tile service (remember to add an attribution where necessary).


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif).
2. This is the second screen shot

== Changelog ==



= 1.0 =
* First Version. Basic map creation


== Upgrade Notice ==