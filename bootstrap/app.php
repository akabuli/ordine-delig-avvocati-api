<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


// Force detection from current environment only


$environment = getenv('APP_ENV') ?? null;

// Check if user selected an environment
if (!$environment) {
    die('Error: Please specify an environment type using APP_ENV.\nExample: $env:APP_ENV="test"; php artisan serve\nAvailable environments: development, test, production' . PHP_EOL);
}

if (!file_exists(__DIR__ . '/../.env.' . $environment)) {
    die('Environment file not found');
}


// echo $environment . PHP_EOL;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
