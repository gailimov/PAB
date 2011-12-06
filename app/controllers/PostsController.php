<?php

namespace app\controllers;

use app\controllers\AppController,
    core\Db;

class PostsController extends AppController
{
    public function indexAction()
    {
        $posts = Db::factory('Posts')->getAll();
        $this->render('posts/index', array('posts' => $posts));
    }
    
    public function showAction($slug)
    {
        $post = Db::factory('Posts')->getBySlug($slug);
        $this->title = $this->appendTitle($post['title']);
        $this->render('posts/show', array('post' => $post));
    }
}
