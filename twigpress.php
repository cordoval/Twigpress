<?php
/*
Plugin Name: Twigpress
Plugin URI: http://www.github.com/maxcal/twigpress/
Description: Use the Twig Engine for your wordpress templates, built on the work of Fabien Potencier and Darko Golešö .
Version: 0.1
Author: Max Calabrese, 
Author URI: http://URI_Of_The_Plugin_Author
License: GPL2
*/

/*  Copyright Max Calabrese 2012

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

//Main twig library autoloader file
require_once dirname(__FILE__) . '/lib/Twig/Autoloader.php';
//My custom class made, I also want it to be autoloaded
require_once dirname(__FILE__) . '/twigpress_autoloader.php';
// Proxyloader
require_once dirname(__FILE__) . '/twigpress_proxy.php';
 
function twigAutoLoad() {
    Twig_Autoloader::register();
    Twigpress_Autoloader::register();
}

add_action('init', 'twigAutoLoad');
