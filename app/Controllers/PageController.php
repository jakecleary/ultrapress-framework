<?php

namespace UltraPress\Controllers;

use Ultra\View\View;

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
