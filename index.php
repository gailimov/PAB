<?php

function __autoload($className)
{
    $path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (!file_exists($path))
        throw new \Exception('File ' . $path . ' not found');
    require_once $path;
}

use core\Registry,
    core\Router;

Registry::set('rootPath', __DIR__);

$router = new Router();
$router->run();
