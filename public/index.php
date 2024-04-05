<?php

require_once __DIR__ . '/../vendor/autoload.php';

define('QUILL_START', microtime(true));

(Quill\Factory\QuillFactory::make())
    ->loadDotEnv(
        Quill\Support\Helpers\Path::applicationFile('.env')
    )
    ->loadConfigurationFiles(
        Quill\Support\Helpers\Path::configFile('app.php'),
        // You can pass more files as parameters
    )
    ->loadRoutesFrom(
        Quill\Support\Helpers\Path::routeFile('api.php'),
        // You can pass more files as parameters
    )
    ->using('example')
    ->up();

