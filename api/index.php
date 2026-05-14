<?php

// Laravel 11 specific cache manifest environment variables
putenv('LARAVEL_PACKAGES_CACHE=/tmp/packages.php');
putenv('LARAVEL_SERVICES_CACHE=/tmp/services.php');

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Force storage path to /tmp for Vercel
$app->useStoragePath('/tmp');

$app->handleRequest(\Illuminate\Http\Request::capture());
