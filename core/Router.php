<?php

namespace core;

/**
 * Router
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class Router
{
    /**
     * Controller
     * 
     * @var string
     */
    private $_controller;
    
    /**
     * Action
     * 
     * @var string
     */
    private $_action;
    
    /**
     * Params
     * 
     * @var array
     */
    private $_params = array();
    
    /**
     * Default controller
     * 
     * @var string
     */
    private $_defaultController = 'Posts';
    
    /**
     * Default action
     * 
     * @var string
     */
    private $_defaultAction = 'index';
    
    /**
     * Get base URL
     * 
     * @return string
     */
    public function getBaseUrl()
    {
        return dirname($_SERVER['SCRIPT_NAME']);
    }
    
    /**
     * Dispatch
     * 
     * @return void
     */
    public function dispatch()
    {
        $segments = $this->getUriSegments();
        
        $this->_controller = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : $this->_defaultController . 'Controller';
        $this->_action     = !empty($segments[1]) ? $segments[1] . 'Action'              : $this->_defaultAction . 'Action';
        $this->_params     = array_slice($segments, 2);
        
        return array(
            'controller' => $this->_controller,
            'action' => $this->_action,
            'params' => $this->_params
        );
    }
    
    /**
     * Get URI
     * 
     * @return array
     */
    private function getUri()
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
}
