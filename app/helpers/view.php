<?php

/**
 * Return a view.
 *
 * @param  string $file The file path using dot-notation
 * @param  array $data Data to pass through to the view
 * @return Allsop\View
 */
function view($file, $data = [])
{
    return \Allsop\View::get($file, $data);
}

/**
 * Return a partial.
 *
 * @param string $file The file path using dot-notation
 * @param array $data Data to pass through to the partial
 * @return Allsop\View
 */
function partial($file, $data = [])
{
    return \Allsop\View::partial($file, $data);
}
