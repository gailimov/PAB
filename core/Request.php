<?php

namespace core;

/**
 * HTTP request class
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class Request
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
     * Constructor
     * 
     * @param array $options Options
     */
    public function __construct(array $options)
    {
        $this->_controller = $options['controller'];
        $this->_action     = $options['action'];
        $this->_params     = $options['params'];
    }
    
    /**
     * Get controller
     * 
     * @return string
     */
    public function getController()
    {
        return $this->_controller;
    }
    
    /**
     * Get controller ID
     * 
     * @return string
     */
    public function getControllerId()
    {
        return mb_strtolower(str_replace('Controller', '', $this->_controller));
    }
    
    /**
     * Get action
     * 
     * @return string
     */
    public function getAction()
    {
        return $this->_action;
    }
    
    /**
     * Get action ID
     * 
     * @return string
     */
    public function getActionId()
    {
        return str_replace('Action', '', $this->_action);
    }
    
    /**
     * Get params
     * 
     * @return array
     */
    public function getParams()
    {
        return $this->_params;
    }
}
