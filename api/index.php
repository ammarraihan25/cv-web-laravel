<?php

// Force manifest paths to /tmp before anything else
putenv('LARAVEL_SERVICES_PATH=/tmp/services.php');
putenv('LARAVEL_PACKAGES_PATH=/tmp/packages.php');

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Force storage path to /tmp for Vercel
$app->useStoragePath('/tmp');

$app->handleRequest(\Illuminate\Http\Request::capture());
