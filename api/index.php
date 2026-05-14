<?php

require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Official Laravel 11 way to redirect bootstrap cache
$app->setBootstrapCachePath('/tmp');
$app->useStoragePath('/tmp');

$app->handleRequest(\Illuminate\Http\Request::capture());
