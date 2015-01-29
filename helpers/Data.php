<?php

/**
 * Helpers for manipulating and debugging generic
 * datasets like arrays or objects.
 */
class Data
{

    /**
     * Dump some data in a clean way.
     *
     * @param  * $data Any data
     * @return string $data The data, wrapped in <pre> tags
     */
    public static function dump($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }

    /**
     * Dump and die some data.
     *
     * @param  mixed $data The data to dump
     * @return string
     */
    public static function dd($data)
    {
        self::dump($data);
        die();
    }

    /**
     * Alias for the ObjectMap class bind retrieval.
     *
     * @param string $name The binded object you want to retrieve
     */
    public static function getObject($name)
    {
        return UltraPress\ObjectMap::instance($name);
    }

    /**
     * Turn an array into an object.
     *
     * @param array $array The array in question
     */
    public static function arrayToObject($array)
    {
        if (is_array($array))
        {
            return (object) array_map(__FUNCTION__, $array);
        }
        else
        {
            return $array;
        }
    }

    /**
     * Convert strings with underscores into CamelCase.
     *
     * @param string $string The string to convert
     * @param bool $first_char_caps camelCase or CamelCase
     * @return string The converted string
     */
    function underscoreToCamelCase($string, $first_char_caps = false)
    {
        if($first_char_caps === true)
        {
            $string[0] = strtoupper($string[0]);
        }

        $func = create_function('$c', 'return strtoupper($c[1]);');

        return preg_replace_callback('/_([a-z])/', $func, $string);
    }

}
