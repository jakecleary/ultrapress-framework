<?php

/**
 * Helper class responsible for grabbing Wordpress' global data and for getting
 * standard Wordpress data like post_content, featured images etc.
 * 'Item' is just another word for post (as in WP_Post).
 */
class Item
{

    /**
     * Output the retrieved content with proper formatting.
     *
     * @param string $content The item's content
     * @return string The formatted post content
     */
    public static function itemContent($content)
    {
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);

        return $content;
    }

    /**
     * Grab the URL for the featured image in a specific size.
     *
     * @param integer $itemId The item (post) ID
     * @param string $size The image size you need
     * @return string|boolean The image's url OR false
     */
    public static function itemFeaturedImage($itemId, $size)
    {
        if (has_post_thumbnail($itemId))
        {
            return wp_get_attachment_image_src(
                get_post_thumbnail_id($itemId), $size
            )[0];
        }

        return false;
    }

    /**
     * Get the post exceprt, with a custom length.
     *
     * @param string $content The item's content field
     * @param integer $length The number of words to include in the excerpt
     * @return string The generated excerpt
     */
    public static function itemExcerpt($content, $length = 30)
    {
        return wp_trim_words( $content , $length );
    }

    /**
     * Return the first category name/url.
     *
     * @param WP_Post $item The item (post) object
     * @return Object|boolean The category name and url OR false
     */
    public static function itemCategory(WP_Post $item)
    {
        $categories = get_the_category($item->ID);

        if(!empty($categories))
        {
            $itemCategory = $categories[0];

            return (object) [
                'name' => $itemCategory->name,
                'url' => get_category_link($itemCategory->term_id)
            ];
        }

        return false;
    }

}
