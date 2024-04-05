<?php

namespace App\Http\Middlewares;

use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class ExampleMiddleware implements MiddlewareInterface
{
    /**
     * @throws Exception
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if ($request->hasHeader('x-foo-bar')) {
            throw new Exception('The x-foo-bar header is forbidden.');
        }

        return $handler->handle($request);
    }
}