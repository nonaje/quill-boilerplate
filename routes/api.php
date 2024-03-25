<?php

use Quill\Config\Config;
use Quill\Request\Request;
use Quill\Response\Response;
use Quill\Router\Router;
use App\Http\Controllers\HealthcheckController;

$router = Router::make();

$router->get('/', function (Request $request, Response $response) {
    $response->send([
        'success' => true,
        'appName' => Config::make()->get('app.name'),
    ]);
});

$router
    ->get('/healthcheck', [HealthcheckController::class])
    ->middleware(['example']);
