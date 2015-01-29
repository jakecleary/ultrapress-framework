<?php

use Ultra\Application\Container;
use Ultra\Config\Config;

/**
 * Load the classmap.
 */
require_once(FULL_PATH . 'vendor/autoload.php');

/**
 * Load helper functions.
 */
foreach (glob(FULL_PATH . 'helpers/*.php') as $filename)
{
    include $filename;
}

/**
* Initialize the configuration.
*/
Config::init();

/**
 * Bind instances of each post type to the app so we can call them easily.
 * Simply add more by creating a new custom post-type class and
 * adding the full class path to the array below.
 */
Container::bind([
    'pages' => new UltraPress\PostTypes\Page(),
    'posts' => new UltraPress\PostTypes\Post()
]);
