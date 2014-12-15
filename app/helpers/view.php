<?php

/**
 * Return a view.
 *
 * @param  string $file The file path using dot-notation
 * @param  array $data Data to pass through to the view
 * @return WpAdv\View
 */
function view($file, $data = [])
{
    return \WpAdv\View::get($file, $data);
}

/**
 * Return a partial.
 *
 * @param string $file The file path using dot-notation
 * @param array $data Data to pass through to the partial
 * @return WpAdv\View
 */
function partial($file, $data = [])
{
    return \WpAdv\View::partial($file, $data);
}
