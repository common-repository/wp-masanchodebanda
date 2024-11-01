<?php
/*
Plugin Name: WP MasAnchoDeBanda
Plugin URI: http://nuevosprogramadores.com/2009/02/wp_masanchodebanda
Description: This plugin was developed to promote the masanchodebanda.com campaign. See readme.txt for more information about the campaign.
Version: 1.0.1
Author: Pablo Rodríguez
Author URI: http://nuevosprogramadores.com
*/
/*  Copyright 2009  Pablo Rodríguez  (email : prodriguez@nuevosprogramadores.com)

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


function wp_masanchodebanda()
{
// '
	$src = str_replace(ABSPATH, get_settings('siteurl')."/", dirname(__FILE__)) . "/wp-masanchodebanda.png";
	$style="position: absolute; top: 0; left: 0; z-index: 100; height: 220px; width: 220px;";
	$div = "<div id=\"masanchodebanda\" style=\"$style\"><img src=\"$src\" alt=\"MasAnchoDeBanda.com\" style=\"border: 0;\" usemap=\"#cabra\" /></div><map name=\"cabra\"><area shape=\"poly\" coords=\"0,170,0,220,220,0,170,0\" href=\"http://masanchodebanda.com\" target=\"_blank\" title=\"M&aacute;s ancho de banda para Uruguay\" /></map>\r";

	echo $div;
}

add_action('wp_footer', 'wp_masanchodebanda');

?>