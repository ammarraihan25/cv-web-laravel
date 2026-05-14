<?php

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Force storage path to /tmp for Vercel
$app->useStoragePath('/tmp');

// Run migrations automatically for SQLite in-memory database
// This ensures tables exist on every request in serverless environment
\Illuminate\Support\Facades\Artisan::call('migrate --force');

$app->handleRequest(\Illuminate\Http\Request::capture());
