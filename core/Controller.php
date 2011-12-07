<?php

namespace core;

/**
 * Base controller
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
abstract class Controller
{
    /**
     * Request instance
     * 
     * @var \core\Request
     */
    protected $_request;
    
    /**
     * Layout
     * 
     * @var string
     */
    protected $_layout = 'app';
    
    /**
     * Contructor
     * 
     * @param \core\Request $request Request instance
     */
    public function __construct(Request $request)
    {
        $this->_request = $request;
    }
    
    public function before()
    {
    }
    
    /**
     * Returns \core\Config new instance
     * 
     * @return \core\Config
     */
    public function getConfig($config = 'app')
    {
        return \core\Config::factory($config);
    }
    
    /**
     * Returns helper's new instance
     * 
     * @param  string $helper Helper name
     * @return object
     */
    public function getHelper($helper)
    {
        $class = '\\app\\helpers\\' . ucfirst($helper);
        return new $class();
    }
    
    /**
     * Get base URL
     * 
     * @return string
     */
    public function getBaseUrl()
    {
        $router = new Router();
        return $router->getBaseUrl();
    }
    
    /**
     * Render partial
     * 
     * @param  string $template Template
     * @param  array  $params   Params
     * @return void
     */
    public function renderPartial($template, array $params = null)
    {
        echo $this->fetchPartial($template, $params);
    }
    
    /**
     * Render
     * 
     * @oaram  string $template Template
     * @param  array  $params   Params
     * @return void
     */
    public function render($template, array $params = null)
    {
        echo $this->fetch($template, $params);
    }
    
    /**
     * Fetch partial
     * 
     * @param  string $template Template
     * @param  array  $params   Params
     * @return string
     */
    private function fetchPartial($template, array $params = null)
    {
        if ($params) {
            if (is_array($params))
                extract($params);
            else
                throw new \Exception('Params must be an array');
        }
        
        ob_start();
        
        $path = Registry::get('rootPath') . '/app/views/' . $template . '.php';
        if (!file_exists($path))
            throw new \Exception('View file ' . $path . ' not found');
        include_once $path;
        
        return ob_get_clean();
    }
    
    /**
     * Fetch
     * 
     * @param  string $template Template
     * @param  array  $params   Params
     * @return string
     */
    private function fetch($template, array $params = null)
    {
        $content = $this->fetchPartial($template, $params);
        return $this->fetchPartial('layouts/' . $this->_layout, compact('content'));
    }
}
