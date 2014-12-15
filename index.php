<?php

/**
* Set the key paths we'll be using
* ================================
* Here we set the theme path, as well as routes to all our core assets.
*/

define('PUBLIC_THEME_PATH', parse_url(get_template_directory_uri())['path'] . '/');
define('FULL_PATH', $_SERVER['DOCUMENT_ROOT'] . PUBLIC_THEME_PATH);
define('PUBLIC_DIR', PUBLIC_THEME_PATH . 'public/');
define('STYLES_DIR', PUBLIC_DIR . 'styles/');
define('SCRIPTS_DIR', PUBLIC_DIR . 'js/');
define('IMAGES_DIR', PUBLIC_DIR . 'img/');

/**
* Initialize the app.
*/
include(FULL_PATH . 'app/bootstrap/start.php');
