<?php

require_once __DIR__ . '/../vendor/autoload.php';

define('QUILL_START', microtime(true));

$app = quill()
    ->loadDotEnv(path()->applicationFile('.env'))
    ->loadConfigurationFiles(path()->configFile('app.php'));


/*-----------------------
|   GLOBAL MIDDLEWARES   |
|-----------------------*/
$app->using('example');


/*-----------------------
|   ROUTE DECLARATIONS   |
|-----------------------*/
$router = $app->router();
$router->loadRoutesFrom(path()->routeFile('api.php'));


/*-----------------------
|   START APPLICATION    |
|-----------------------*/
$app->up();

