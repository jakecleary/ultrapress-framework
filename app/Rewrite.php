<?php

namespace UltraPress;

use UltraPress\PostTypes\PostType;
use Data;

/**
 * Class for easilty registering rewrite rules for a
 * custom post type, without having to type an regex.
 */
class Rewrite
{

    /**
     * The array of regex => query pairs.
     *
     * @var array
     */
    private $rules = [];

    /**
     * Generate some new rewrite rules for a post type.
     *
     * @param PostType $postType
     * @param array $rules An array of rewrite rules
     */
    public function __construct(PostType $postType, array $rules)
    {
        foreach($this->getRulesets($rules) as $ruleset)
        {
            $rulePair = $this->generateRule($ruleset);

            $this->rules[$rulePair[0]] = $rulePair[1];
        }

        $this->addRewriteRules();
    }

    /**
     * Split rules into chunks: one for each url section.
     *
     * @param array $rules Rules passed to instance
     * @return array $rulesets Split rules
     */
    private function getRulesets($rules)
    {
        $rulesets = [];

        foreach($rules as $rule)
        {
            $rulesets[] = explode('/', $rule);
        }

        return $rulesets;
    }

    /**
     * Generate a rule for an array that Wordpress can understand.
     *
     * @param array $ruleset The chunks for the rule
     * @return array regex => query rule pair for Wordpress
     */
    private function generateRule($ruleset)
    {
        $regex = '';

        foreach($ruleset as $ruleChunk)
        {
            if(preg_match('/\{\w+\}/', $ruleChunk))
            {
                $regex .= '/([^/]+)';
            }
            else
            {
                $regex .= '/' . $ruleChunk;
            }
        }

        $regex .= '/?$';

        $content = preg_match('/\{(.*?)\}/', $ruleChunk, $matches);
        $content = $matches[1];

        return array($regex, $content);
    }

    /**
     * Register a rewrite rule with Wordpress.
     */
    private function addRewriteRules()
    {
        foreach($this->rules as $key => $value)
        {
            add_rewrite_rule($key, $value, 'top');
        }
    }

}
