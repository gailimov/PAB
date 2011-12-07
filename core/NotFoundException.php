<?php

namespace core;

/**
 * Not found exception class
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class NotFoundException extends \Exception
{
    /**
     * Show 404 error
     * 
     * @return void
     */
    public function show404()
    {
        header('HTTP/1.1 404 Not Found');
        if ($this->getMessage() == '')
            die('Error 404: Not Found');
        die('Error 404: ' . $this->getMessage());
    }
}
