<?php

use Allsop\ObjectMap;

/**
 * Theme initialization.
 */

/**
 * Hide the 'Custom Fields' menu in production mode.
 */
if (defined('USE_PRODUCTION_ACF')) {
    define('ACF_LITE', true);
}

/**
 * Load the classmap.
 */
require_once(FULL_PATH . 'vendor/autoload.php');

/**
 * Load helper functions.
 */
foreach (glob(FULL_PATH . 'app/helpers/*.php') as $filename)
{
    include $filename;
}

/**
 * Configure the site.
 */
require_once(FULL_PATH . 'config/init.php');

/**
 * Bind instances of each post type to the app so we can call them easily.
 * Simply add more by creating a new custom post-type class and
 * adding the full class path to the array below.
 */
ObjectMap::bind([
    'pages' => new Allsop\PostTypes\Page()),
    'posts' => new Allsop\PostTypes\Post())
]);
