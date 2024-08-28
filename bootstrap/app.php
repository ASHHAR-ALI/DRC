<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'login' => \App\Http\Middleware\Login::class,
            'admin' => \App\Http\Middleware\Admin::class,
            'disputer' => \App\Http\Middleware\Disputer::class,
            'againstdisputer' => \App\Http\Middleware\Adisputer::class,
            'member' => \App\Http\Middleware\Member::class,
            'home' => \App\Http\Middleware\Home::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
