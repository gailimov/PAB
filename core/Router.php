<?php

namespace core;

class Router
{
    /**
     * Return new instance
     * 
     * @return \core\Router
     */
    public static function factory()
    {
        return new self();
    }
    
    /**
     * Run
     * 
     * @return void
     */
    public function run()
    {
        $this->dispatch($this->getUriSegments());
    }
    
    /**
     * Get URI
     * 
     * @return array
     */
    public function getUri()
    {
        return !empty($_SERVER['REQUEST_URI'])  ? $_SERVER['REQUEST_URI']  : null;
        return !empty($_SERVER['PATH_INFO'])    ? $_SERVER['PATH_INFO']    : null;
        return !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
    }
    
    /**
     * Parse URI and get segments
     * 
     * @return array
     */
    private function getUriSegments()
    {
        $uri = $this->getUri();
        
        $segments = preg_replace('/^(.*?)index\.php$/is', '$1', $_SERVER['SCRIPT_NAME']);
        $segments = preg_replace('/^' . preg_quote($segments, '/') . '/is', '', urldecode($uri));
        $segments = preg_replace('/(\/?)(\?.*)?$/is', '', $segments);
        // Cut out unnecessary characters
        $segments = preg_replace('/[^0-9A-Za-zА-Я-а-я._\\-\\/]/is', '', $segments);
        // Cut index.php
        $segments = ltrim(str_replace('index.php', '', $segments), '/');
        // Split the URI to slashes
        $segments = explode("/", $segments);
        // Remove the suffix
        if (preg_match('/^index\.(?:html|php)$/is', $uri[count($segments) - 1]))
            unset($segments[count($segments) - 1]);
            
        return $segments;
    }
    
    /**
     * Dispatch
     * 
     * @param  array $segments URI segments
     * @return void
     */
    private function dispatch(array $segments)
    {
        $params = array();
        
        $controller = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'PostsController';
        $action     = !empty($segments[1]) ? $segments[1] . 'Action' : 'indexAction';
        $params     = array_slice($segments, 2);
        
        $class = '\\app\\controllers\\' . $controller;
        
        if (!class_exists($class))
            throw new \Exception('Controller class ' . $class . ' not found');
        
        if (is_callable(array($class, $action)))
            call_user_func_array(array($class, $action), $params);
        else
            throw new \Exception('404 Not Found');
    }
}
