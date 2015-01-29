<?php

namespace UltraPress\PostTypes;

use WP_Post;
use WP_Query;
use Ultra\PostType\PostType;

class Page extends PostType
{

    public function __construct()
    {
        $this->postType = 'page';
        $this->singular = $this->postType;
        $this->plural   = $this->postType . 's';
    }

}
