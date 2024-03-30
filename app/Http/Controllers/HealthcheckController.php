<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Quill\Config\Config;
use Quill\Controller\Controller;

class HealthcheckController extends Controller
{
    public function __invoke(): void
    {
        $this->response->send([
            'success' => true,
            'request_execution_time' => microtime(true) - APP_START
        ]);
    }
}
