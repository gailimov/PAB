<?php

namespace core;

class View
{
    /**
     * Return new instance
     * 
     * @return \core\View
     */
    public static function factory()
    {
        return new self();
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
        if ($params !== null) {
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
        return $this->fetchPartial('layouts/application', compact('content'));
    }
}
