<?php

namespace core;

use core\Router;

class Pab
{
    /**
     * Returns base URL
     * 
     * @return string
     */
    public static function getBaseUrl()
    {
        return rtrim(str_replace('index.php/', '', Router::factory()->getUri()), '/');
    }
}
