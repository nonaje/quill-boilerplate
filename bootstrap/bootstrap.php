<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'global_functions.php';

define('APP_START', microtime(true));

try {
    // LOAD ENVIRONMENT VARIABLES VIA .env file
    Dotenv\Dotenv::createImmutable(__DIR__ . '/../')->load();

    // INITIALIZE APPLICATION CONFIGURATION
    Quill\Config\Config::make(new Quill\Config\Parser());

    // INITIALIZE APPLICATION ROUTER
    Quill\Router\Router::make(
        store: Quill\Router\RouteStore::make(),
        dispatcher: new Quill\Router\RouterDispatcher(
            request: Quill\Request\Request::make(),
            response: Quill\Response\Response::make(),
            config: Quill\Config\Config::make(),
            executor: new Quill\Router\RouteTargetExecutor
        ),
        middleware: new Quill\Router\MiddlewareValidator
    )->load(__DIR__ . '/../routes/api.php')->dispatch();

} catch (Throwable $e) {
    dd('Error during application bootstrap: ', $e);
}
