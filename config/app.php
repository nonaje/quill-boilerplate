<?php

return [
    /*----------------------------------------------------------------------------
    | THE APPLICATION NAME                                                        |
    |-----------------------------------------------------------------------------
    | It's going to be used for naming the application and the docker containers  |
    |----------------------------------------------------------------------------*/
    'name' => env('APP_NAME', 'lightweight_api'),


    /*----------------------------------------------------------------------------
    | THE APPLICATION ENVIRONMENT                                                 |
    |-----------------------------------------------------------------------------
    | It's going to be used for prevent showing error on production               |
    |----------------------------------------------------------------------------*/
    'environment' => env('APP_ENVIRONMENT', 'dev'),


    /*----------------------------------------------------------------------------
    | AVAILABLE GLOBAL MIDDLEWARES                                                |
    |-----------------------------------------------------------------------------
    | These can be used as application middleware, routes, or route groups.       |
    |----------------------------------------------------------------------------*/
    'middlewares' => [
        'example' => \App\Http\Middlewares\ExampleMiddleware::class,
    ],
];
