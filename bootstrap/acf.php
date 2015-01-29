<?php

/**
 * The path where we want to save/load our ACF fields.
 *
 * @var string
 */
$acfPath = FULL_PATH . 'acf';

/**
 * Set the path of where we load the fields.
 */
function acfLoad($paths)
{
    global $acfPath;

    unset($paths[0]);
    $paths[] = $acfPath;

    return $paths;
}

/**
 * Set the path of where we save the fields.
 */
function acfSave($path)
{
    global $acfPath;
    $path = $acfPath;

    return $path;
}

add_filter('acf/settings/load_json', 'acfLoad');
add_filter('acf/settings/save_json', 'acfSave');

/**
 * Set up the options pages.
 */
if(function_exists('acf_add_options_page'))
{
    acf_add_options_page([
        'page_title' => 'A&F Settings',
        'menu_title' => 'Settings',
        'menu_slug'  => 'site-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);

    acf_add_options_sub_page([
        'page_title'  => 'Products',
        'menu_title'  => 'Products',
        'parent_slug' => 'site-settings',
    ]);
}
