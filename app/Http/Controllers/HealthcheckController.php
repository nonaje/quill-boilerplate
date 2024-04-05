<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Quill\Config\Config;
use Quill\Contracts\Response\ResponseInterface;
use Quill\Controller\Controller;

final class HealthcheckController extends Controller
{
    public function __invoke(): ResponseInterface
    {
        return $this->response->json([
            'appName' => config('app.name'),
            'totalExecutionTime' => microtime(true) - QUILL_START
        ]);
    }
}
