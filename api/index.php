<?php

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Force storage to /tmp
$app->useStoragePath('/tmp');

// Ensure View Service Provider is registered (Fix for BindingResolutionException [view])
if (!$app->bound('view')) {
    $app->register(\Illuminate\View\ViewServiceProvider::class);
}

$app->handleRequest(\Illuminate\Http\Request::capture());
