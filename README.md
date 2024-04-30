# Boat Tracking WordPress Plugin

![Header Image](https://ps.w.org/leaflet-map/assets/banner-1544x500.png?rev=1693083)

Add a live map generated with [Skipperblogs](https://www.skipperblogs.com/) for tracking your boat with marine technologies such as Iridium Go, AIS, Garmin InReach, SPOT, YB Tracking. Includes statistics about your voyage like total distance sailed, average speed, top speed, etc.

![Map Screenshot](https://i.imgur.com/2XOMUTo.jpeg)

## Table of Contents

- [Boat Tracking WordPress Plugin](#boat-tracking-wordpress-plugin)
  - [Table of Contents](#table-of-contents)
  - [Installation](#installation)
  - [General Usage](#general-usage)
  - [Setting up your account](#general-usage)
  - [Frequently Asked Questions](#frequently-asked-questions)

## Installation

- Install via the WordPress plugins page on your WordPress site: `/wp-admin/plugin-install.php` (search "Boat tracking")

## General Usage

```
[live-map]
```

The above shortcode will produce a map centered on the last position of your boat.

To customize the map dimension add the following attributes to the short code 

```
[live-map heigth="300" width="100%"]
```

## Setting up your account and trackings

This plugin requires an account by Skipperblogs

1. Register at https://www.skipperblogs.com/register
2. Initialize the map https://www.skipperblogs.com/dashboard/map-editor
3. Setup individual trackings https://www.skipperblogs.com/dashboard/nav/trackings

## Customizing the map

You can change the track color and style, the map background, the boat icon and the statistics from the Skipperblogs' [map editor](https://www.skipperblogs.com/dashboard/map-editor).


That's all for now! Thanks!

## Frequently Asked Questions

### Can I use the live map and the plugin with a free account?

Absolutely. The map can be updated with the map editor Aka manual tracking

### Can I remove the Skipperblogs' logo ?

Yes, in you can hide the Skipperblogs logo in the mapshare settings https://www.skipperblogs.com/dashboard/nav/map/share

## Terms of use

There are no terms of use for this plugin, however when registering by Skipperblogs and using its services, you agree to our [Terms of use](https://www.skipperblogs.com/terms), [Privacy policy](https://www.skipperblogs.com/terms/privacy) and [user guidelines](https://www.skipperblogs.com/terms/user-guidelines).

## Licence

This plugins is relaesed under the GNU GPL V2 licence.
