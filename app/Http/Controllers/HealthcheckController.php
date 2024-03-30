<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Quill\Controller\Controller;

class HealthcheckController extends Controller
{
    public function __invoke(): void
    {
        $this->response->send([
            'appName' => config('app.name'),
            'request_execution_time' => microtime(true) - APP_START
        ]);
    }
}
