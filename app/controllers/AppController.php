<?php

namespace app\controllers;

class AppController extends \core\Controller
{
    /**
     * Title
     * 
     * @var string
     */
    public $title;
    
    public function before()
    {
        parent::before();
        $this->title = $this->getConfig()->params['title'];
    }
    
    /**
     * Append title
     * 
     * @param  string $title TItle
     * @return string
     */
    protected function appendTitle($title)
    {
        return $title . $this->getConfig()->params['titleSeparator'] . $this->title;
    }
}
