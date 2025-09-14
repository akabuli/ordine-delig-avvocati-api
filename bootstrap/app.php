<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$environment = getenv('APP_ENV');

// Check if user selected an environment
if (! $environment) {
    exit('Error: Please specify an environment type using APP_ENV.\nExample: $env:APP_ENV="test"; php artisan serve\nAvailable environments: development, test, production' . PHP_EOL);
}

if (! file_exists(__DIR__ . '/../.env.' . $environment)) {
    exit('Environment file not found');
}

echo 'Running .env' . $environment . PHP_EOL;

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
