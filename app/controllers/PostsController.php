<?php

namespace app\controllers;

use core\Controller,
    core\View;

class PostsController extends Controller
{
    public function indexAction()
    {
        $this->_view->render('posts/index');
    }
    
    public function helloAction($name = 'Vasya')
    {
        $message = 'Hello, ' . $name . '!';
        $this->_view->renderPartial('posts/hello', compact('message'));
    }
}
