<?php

use App\Http\Controllers\HealthcheckController;
use Quill\Router\Router;

/** @var Router $this */
$this->get('/', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/a', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/b', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/c', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/d', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/e', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/f', [HealthcheckController::class])
    ->middleware(['example']);

$this->get('/g', [HealthcheckController::class])
    ->middleware(['example']);
