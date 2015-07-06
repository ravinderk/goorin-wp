<?php
/*
Plugin Name: Anatta Link Store To Shop
Plugin URI:  http://anattadesign.com
Description: This plugin helps you to link you post[shop post type] to store location [created by store location plus plugin] by acf setting.
Version:     0.1
Author:      Ravinder Kumar
Author URI:  http://anattadesign.com
License:     GPL2

Store Locator is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Store Locator is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

/**
 * Global variable
 */
define( 'LTSS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'LTSS_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

/**
 * require files
 */
//require_once LTSS_PLUGIN_DIR . 'inc/class-acf.php';
require_once LTSS_PLUGIN_DIR . 'inc/shops-hooks.php';
require_once LTSS_PLUGIN_DIR . 'inc/enqueue-scripts.php';
