<?php

$startTime = microtime(true);

require_once __DIR__ . '/core/Loader.php';

\core\Loader::factory()
    ->registerPath(__DIR__ . '/')
    ->registerPath(__DIR__ . '/vendors/')
    ->registerAutoload();

\core\Registry::set('rootPath', __DIR__);
\core\Registry::set('startTime', $startTime);

try {
    \core\FrontController::run();
} catch (\core\NotFoundException $e) {
    $e->show404();
} catch (\Exception $e) {
    die($e->getMessage());
}
