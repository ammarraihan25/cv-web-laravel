<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Force storage path to /tmp for Vercel's read-only filesystem
$app->useStoragePath('/tmp');

$app->handleRequest(Request::capture());
