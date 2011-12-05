<?php

namespace core;

class Registry
{
    /**
     * Singleton instance
     * 
     * @var \core\Registry
     */
    private static $_instance;
    
    /**
     * Registry
     * 
     * @var array
     */
    private $_registry = array();
    
    private function __construct()
    {
    }
    
    private function __clone()
    {
    }
    
    /**
     * Get singleton instance
     * 
     * @return \core\Registry
     */
    private static function getInstance()
    {
        if (!self::$_instance)
            self::$_instance = new self();
        return self::$_instance;
    }
    
    /**
     * Set value by key
     * 
     * @param  string $key   Key
     * @param  mixed  $value Value
     * @return void
     */
    public static function set($key, $value)
    {
        self::getInstance()->_registry[$key] = $value;
    }
    
    /**
     * Get value by key
     * 
     * @param  string $key Key
     * @return mixed || null
     */
    public static function get($key)
    {
        if (isset(self::getInstance()->_registry[$key]))
            return self::getInstance()->_registry[$key];
        return null;
    }
}
