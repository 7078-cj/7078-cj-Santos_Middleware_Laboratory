<?php

use App\Http\Middleware\GlobalMiddleware;
use App\Http\Middleware\RouteMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // TODO
        // REGISTER YOUR MIDDLEWARES HERE
        $middleware->append(GlobalMiddleware::class);

        $middleware->alias(['role'=>RouteMiddleware::class]);
        // YOU CAN USE ALIAS, AND REMEMBER THE PRIORITIZATION OF APPLYING MIDDLEWARES
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
