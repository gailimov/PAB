<?php

namespace core;

/**
 * Config
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class Config
{
    /**
     * Params
     * 
     * @var array
     */
    public $params = array();
    
    /**
     * Constructor
     * 
     * @param string $file Config file
     */
    public function __construct($file)
    {
        $path = Registry::get('rootPath') . '/app/config/' . $file . '.php';
        if (!file_exists($path))
            throw new \Exception('Config file ' . $path . ' not found');
        $this->params = require_once $path;
    }
    
    /**
     * Returns new instance
     * 
     * @param  string $file Config file
     * @return \core\Config
     */
    public function factory($file = 'app')
    {
        return new self($file);
    }
}
