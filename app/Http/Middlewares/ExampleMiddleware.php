<?php

namespace App\Http\Middlewares;

use Quill\Request\Request;
use Quill\Response\Response;

final class ExampleMiddleware
{
    public function __invoke(Request $request, Response $response): void
    {
    }
}