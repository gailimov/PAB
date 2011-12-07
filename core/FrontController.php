<?php

namespace core;

/**
 * Front Controller
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class FrontController
{
    /**
     * Run
     * 
     * @return void
     */
    public static function run()
    {
        $router = new Router();
        $options = $router->dispatch();
        
        $class = '\\app\\controllers\\' . $options['controller'];
        if (!class_exists($class))
            throw new \Exception('Controller class ' . $class . ' not found');
            
        $obj = new $class(new Request($options));
        
        if (is_callable(array($class, $options['action']))) {
            $obj->before();
            call_user_func_array(array($obj, $options['action']), $options['params']);
        } else {
            throw new NotFoundException('Not found');
        }
    }
}
