<?php
/*
Plugin Name: Odyssey Toolkit
Plugin URI: http://www.greenvilleonline.com/
Description: A Toolkit for facilitating Odyssey functionality in Wordpress.
Version: 1.0
Author: William Fox
Author URI: http://www.greenvilleonline.com
License: GPL2
*/
/*  Copyright 2011  William Fox  (email : wfox@greenvillenews.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if (!class_exists("OdysseyPlugin")) {
	class OdysseyPlugin {
		function OdysseyPlugin() { //constructor

			function create_my_customfeed() {
				load_template( plugin_dir_path( __FILE__ ) . 'php/newswell-mod.php'); 
			}

			add_action('do_feed_newswellmod', 'create_my_customfeed', 10, 1);
		
		}
	}
} 

if (class_exists("OdysseyPlugin")) {
	$ody_plugin = new OdysseyPlugin();
}
?>