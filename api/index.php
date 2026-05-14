<?php

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Storage path is still needed for logs/views
$app->useStoragePath('/tmp');

$app->handleRequest(\Illuminate\Http\Request::capture());
