<?php

function __autoload($className)
{
    $path = str_replace('\\', '/', $className);
    if (!file_exists(__DIR__ . '/' . $path . '.php'))
        throw new \Exception('File ' . __DIR__ . '/' . $path . '.php not found');
    require_once __DIR__ . '/' . $path . '.php';
}

use core\Router,
    core\Registry;

Registry::set('rootPath', __DIR__);
Router::factory()->run();
