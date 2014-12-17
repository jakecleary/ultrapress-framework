<?php

namespace UltraPress\PostTypes;

use WP_Post;
use WP_Query;
use UltraPress\PostTypes\PostType;
use UltraPress\Rewrite;

class Post extends PostType
{

    public function __construct()
    {
        new Rewrite($this, [
            '{post_type}/{category_name}/{post}'
        ]);
    }

}
