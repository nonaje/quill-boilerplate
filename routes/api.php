<?php

use App\Http\Controllers\HealthcheckController;
use Quill\Router\Router;

/** @var Router $this */
$this->get('/', [HealthcheckController::class])
    ->middleware(['example']);
