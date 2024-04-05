<?php

return function (\Quill\Contracts\Router\RouterInterface $app) {
    $app->get('/', [\App\Http\Controllers\HealthcheckController::class]);
};
