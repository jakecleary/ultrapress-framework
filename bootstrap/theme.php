<?php

use WpAdv\Config;

/**
 * Set up the images sizes we need.
 */
if(Config::theme('thumbnail_support') === true)
{
    add_theme_support('post-thumbnails');

    // Register the sizes we want to use.
    // add_image_size('xyz', 123, 123, true);
}

/**
 * Disable the theme editor, or not.
 */
if(Config::theme('theme_editor') === false)
{
    function remove_editor_menu()
    {
        remove_action('admin_menu', '_add_themes_utility_last', 101);
    }

    add_action('_admin_menu', 'remove_editor_menu', 1);
}

/**
 * Disable the admin bar, or not.
 */
if(Config::theme('admin_bar') === false)
{
    add_filter('show_admin_bar', '__return_false');
}
