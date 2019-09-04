<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 12/27/2017
 * Time: 12:00
 */

if (!defined('COINSO_DIST_DIRECTORY')){
	define('COINSO_DIST_DIRECTORY', get_stylesheet_directory_uri() . '/assets/dist/' );
}
if( !defined('COINSO_TEXTDOMAIN')){
	define('COINSO_TEXTDOMAIN', 'compass_twentyeighteen');
}
if ( !defined('COINSO_GLOBALS_FOLDER')){
    define('COINSO_GLOBALS_FOLDER', 'template-parts/globals/content');
}
if ( !defined('COINSO_LAYOUTS_FOLDER')){
    define('COINSO_LAYOUTS_FOLDER', 'template-parts/layouts/');
}