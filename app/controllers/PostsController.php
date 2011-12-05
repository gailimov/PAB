<?php

namespace app\controllers;

use core\View;

class PostsController
{
    public function indexAction()
    {
        View::factory()->render('posts/index');
    }
    
    public function helloAction($name = 'Vasya')
    {
        $message = 'Hello, ' . $name . '!';
        View::factory()->renderPartial('posts/hello', compact('message'));
    }
}
