<?php

namespace UltraPress\Controllers;

use UltraPress\View;

class PageController extends BaseController
{

    /**
    * View the home page.
    */
    public static function getHome()
    {
        View::get('pages.home');
    }

}
