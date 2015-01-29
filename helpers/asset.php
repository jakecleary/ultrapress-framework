<?php

/**
 * Wrapper around \Ultra\Asset\Asset::stylesheet()
 *
 * @param string $file The file name
 * @return string The full path to the file
 */
function stylesheet($file)
{
    return \Ultra\Asset\Asset::stylesheet($file);
}

/**
 * Wrapper around \Ultra\Asset\Asset::script()
 *
 * @param string $file The file name
 * @return string The full path to the file
 */
function script($file)
{
    return \Ultra\Asset\Asset::stylesheet($file);
}

/**
 * Wrapper around \Ultra\Asset\Asset::image()
 *
 * @param string $file The file name
 * @return string The full path to the file
 */
function image($file)
{
    return \Ultra\Asset\Asset::stylesheet($file);
}
