<?php

require_once __DIR__ . '/core/Loader.php';

\core\Loader::factory()
    ->registerPath(__DIR__ . '/')
    ->registerPath(__DIR__ . '/vendors/')
    ->registerAutoload();

\core\Registry::set('rootPath', __DIR__);

\core\FrontController::run();
