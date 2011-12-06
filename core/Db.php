<?php

namespace core;

/**
 * Database class
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
abstract class Db
{
    /**
     * \Zend\Db\Adapter\PdoMysql instance
     * 
     * @var \Zend\Db\Adapter\PdoMysql
     */
    protected $_db;
    
    public function __construct()
    {
        $this->_db = new \Zend\Db\Adapter\PdoMysql(Config::factory()->params['db']);
    }
    
    /**
     * Returns new instance
     * 
     * @return object
     */
    public static function factory($model)
    {
        $class = '\\app\\models\\' . ucfirst($model);
        return new $class();
    }
}
