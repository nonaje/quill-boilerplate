<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Quill\Request\Request;
use Quill\Response\Response;

abstract class Controller
{
    public function __construct(
        protected readonly Request $request,
        protected readonly Response $response
    ) { }
}
