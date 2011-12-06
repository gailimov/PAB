<?php

namespace core;

/**
 * Registry
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class Loader
{
    /**
     * Paths
     * 
     * @var array
     */
    private $_paths = array();
    
    /**
     * Returns new instance
     * 
     * @return \core\Loader
     */
    public static function factory()
    {
        return new self();
    }
    
    /**
     * Register path
     * 
     * @param  string $path Path
     * @return \core\Loader
     */
    public function registerPath($path)
    {
        if (!in_array($path, $this->_paths))
            $this->_paths[] = $path;
        return $this;
    }
    
    /**
     * Register autoload methods
     * 
     * @return void
     */
    public function registerAutoload()
    {
        spl_autoload_register(array(__CLASS__, 'load'));
    }
    
    /**
     * Load
     * 
     * @param  string $class Class
     * @return void
     */
    private function load($class)
    {
        $classPath = str_replace('\\', '/', $class) . '.php';
        foreach ($this->_paths as $path) {
            if (file_exists($path . $classPath))
                require_once $path . $classPath;
        }
    }
}
