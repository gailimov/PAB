<?php

namespace core;

/**
 * View
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class View
{
    /**
     * Layout
     * 
     * @var string
     */
    private $_layout = 'app';
    
    /**
     * Set layout
     * 
     * @param  string $layout Layout
     * @return \core\View
     */
    public function setLayout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
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
        include_once Registry::get('rootPath') . '/app/views/' . $template . '.php';
        
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
