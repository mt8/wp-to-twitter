<?php
/**
 * XPoster
 *
 * @package     XPoster
 * @author      Joe Dolson
 * @copyright   2008-2023 Joe Dolson
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: XPoster
 * Plugin URI:  http://www.xposterpro.com
 * Description: Posts a Tweet when you update your WordPress blog or post a link, using your URL shortener. Many options to customize and promote your Tweets.
 * Author:      Joseph C Dolson
 * Author URI:  http://www.joedolson.com
 * Text Domain: wp-to-twitter
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/license/gpl-2.0.txt
 * Domain Path: lang
 * Version:     4.1.0
 */

/*
	Copyright 2011-2023  Joe Dolson (email : joe@joedolson.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include( dirname( __FILE__ ) . '/src/wp-to-twitter.php' );
