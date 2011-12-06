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
     * View instance
     * 
     * @var \core\View
     */
    protected $_view;
    
    /**
     * Contructor
     * 
     * @param \core\Request $request Request instance
     */
    public function __construct(Request $request)
    {
        $this->_request = $request;
        $this->_view = new View();
    }
}
