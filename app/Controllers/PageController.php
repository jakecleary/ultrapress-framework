<?php

namespace UltraPress\Controllers;

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
